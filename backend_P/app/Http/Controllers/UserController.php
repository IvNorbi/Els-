<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\PersonalAccessToken as Token;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{

    public function login(Request $request)
    {
        // Érvényesítjük a beküldött adatokat
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Felhasználót keresünk az email alapján
        $user = User::where('email', $request->email)->first();
        // Ellenőrizzük a jelszót és a felhasználót
        if (!$user || !Hash::check($request->password, $user->password)) {
            // Hibát dobunk, ha a hitelesítés sikertelen
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        // Token létrehozása és visszaadása
        return $user->createToken("MovieCorner", explode(',', $user->ability));
    }


    public function logout(Request $request)
    {
        $user = auth()->user();
        if ($user) {
            // Eredményezd a token érvénytelenítését
            $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        }
        // Töröld a lejárt tokeneket
        Token::where('expires_at', '<=', now())->delete();
        // Visszatérés kilépési üzenettel
        return response()->json(['message' => 'Successfully logged out']);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::get();
    }


    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreUserRequest $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);
    //     $user->ability = "user";
    //     $user->save();
    //     return $user;
    // }

    public function store(StoreUserRequest $request)
    {
       
        // Felhasználó beküldött adatok validációja
       //$this->validateUserRequest($request);
        // Új felhasználó létrehozása
        $user = new User();
        // Felhasználó adatainak feltöltése a kérés alapján
        $this->fillUserFromRequestWhenStore($user, $request);
        $user->save();
        // Felhasználó profilképének feltöltése
        $this->uploadImage($user, $request);
        // Felhasználó mentése az adatbázisba
        $user->save();
        // JSON válasz küldése az új felhasználóval
        return response()->json($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $user;
    }


    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateUserRequest $request, User $user)
    // {
    //     if ($request->name != "") $user->name = $request->name;

    //     /* ....részletek hiányoznak */

    //     if ($request->ability == "admin")
    //         $user->ability = "admin,moderator,user";
    //     elseif ($request->ability == "moderator")
    //         $user->ability = "moderator,user";
    //     else
    //         $user->ability = "user";


    //     $user->save();
    //     return $user;
    // }

    public function update(UpdateUserRequest $request, User $user)
    {
        // Név módosítása, ha a kérés tartalmaz nevet
       
        // Felhasználó adatainak frissítése a kérés alapján
        $this->fillUserFromRequestWhenUpdateByAdmin($user, $request);
        // Felhasználó profilképének frissítése
        $this->uploadImage($user, $request);
        // Felhasználó mentése az adatbázisba
        $user->save();
        // JSON válasz küldése a frissített felhasználóval
        return response()->json($user);
    }

    public function updateMyProfile(UpdateUserRequest $request)
    {

        $tokenuser = auth()->user();
       // dd($tokenuser);
        $user = User::where('id', $tokenuser->currentAccessToken()->tokenable_id)->first();

        // Név módosítása, ha a kérés tartalmaz nevet
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }
        // Felhasználó adatainak frissítése a kérés alapján
        $this->fillUserFromRequestWhenUpdateByUser($user, $request);
        // Felhasználó profilképének frissítése
        $this->uploadImage($user, $request);
        // Felhasználó mentése az adatbázisba
        $user->save();
        // JSON válasz küldése a frissített felhasználóval
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return true;
    }

   /* protected function validateUserRequest($request)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255',
            
            ]);
            $request->validate([
            
                'email' => 'required|string|email|unique:users',
            
            ]);
            $request->validate([
        
                'password' => 'required|string|min:8',
            
            ]);
            $request->validate([

                'imageUrl' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
    }*/

    // protected function fillUserFromRequest(User $user, $request)
    // {
    //     $user->email = $request->input('email');
    //     $user->password = Hash::make($request->input('password'));

    //     // További attribútumok feltöltése a request alapján
    // }

    protected function fillUserFromRequestWhenStore(User $user, $request)
    {
        // Felhasználó e-mail címének beállítása a kérés alapján
       
        $user->name = $request->input('name');
        
        $user->email = $request->input('email');
        // Felhasználó jelszavának beállítása, hash-elése a kérés alapján
        $user->password = Hash::make($request->input('password'));
        // Ellenőrzés: Az 'ability' jelenléte és érvényessége
        $user->ability = "user";
    }

    protected function fillUserFromRequestWhenUpdateByAdmin(User $user, $request)
    {
        if ($request->filled('name'))
            $user->name = $request->input('name');

        if ($request->filled('email'))
            $user->email = $request->input('email');

        if ($request->filled('password'))
            $user->password = Hash::make($request->input('password'));

        if ($request->has('ability')) {
            $validAbilities = ['moderator', 'user'];
            // Az ability érvényességének ellenőrzése
            if (in_array($request->input('ability'), $validAbilities)) {
                if ($request->input('ability') == "moderator") $user->ability = "moderator,user";
                if ($request->input('ability') == "user") $user->ability = "user";
            } else {
                // Hiba dobása, ha érvénytelen ability-t adnak meg
                throw new \Exception('Invalid ability provided');
            }
        }
    }

    protected function fillUserFromRequestWhenUpdateByUser(User $user, $request)
    {
        if ($request->filled('name'))
            $user->name = $request->input('name');

        if ($request->filled('email'))
            $user->email = $request->input('email');

        if ($request->filled('password'))
            $user->password = Hash::make($request->input('password'));
    }

    protected function uploadImage(User $user, $request)
    {
        if ($request->hasFile('image')) {                       // Ellenőrzés: Van-e 'image' mező a kérésben          
            $file = $request->file('image');                    // Kép feltöltése és elérési útvonal beállítása, ha van 'image' mező
            $extension = $file->getClientOriginalExtension();
            $user->imageUrl = str_replace('public/', '', $file->storeAs('public/userprofile', $user->id . "." . $extension));
        } elseif ($request->filled('imageUrl')) {               // Ellenőrzés: Van-e 'imageUrl' mező a kérésben és nem üres-e            
            $user->imageUrl = $request->input('imageUrl');      // Az elérési útvonal beállítása a 'imageUrl' mező értéke alapján
        }
    }
}
