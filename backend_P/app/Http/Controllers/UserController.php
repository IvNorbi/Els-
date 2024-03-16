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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
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
    // public function index()
    // {
    //     return User::get();
    // }

    public function index()
    {
        if (strpos(auth()->user()->ability, 'admin') !== false) {
            return User::all();
        } else {
            return User::select('name', 'imageUrl')->get();
        }
    }

    // public function index()
    // {
    //     $currentUser = auth()->user();

    //     if ($currentUser->can('isadmin') || $currentUser->can('ismoderator')) {
    //         return User::all();
    //     }

    //     return User::select('id', 'name')->get();
    // }

    // public function index()
    // {
    //     if (Auth::check() && Gate::allows('admin')) {
    //         return User::all();
    //     }

    //     return User::select('name', 'imageUrl')->get();
    // }


    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $this->fillUserFromRequestWhenStore($user, $request);
        $user->save();
        $this->uploadImage($user, $request);
        $user->save();
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

    public function update(UpdateUserRequest $request, User $user)
    {
        $this->fillUserFromRequestWhenUpdateByAdmin($user, $request);
        $this->uploadImage($user, $request);
        $user->save();
        return response()->json($user);
    }

    public function updateMyProfile(UpdateUserRequest $request)
    {

        $tokenuser = auth()->user();
        // dd($tokenuser);
        $user = User::where('id', $tokenuser->currentAccessToken()->tokenable_id)->first();
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }
        $this->fillUserFromRequestWhenUpdateByUser($user, $request);
        $this->uploadImage($user, $request);
        $user->save();
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     */

    // Törlés
    public function destroy(User $user)
    {
        $user->delete();
        return true;
    }

    // Regisztárció
    protected function fillUserFromRequestWhenStore(User $user, $request)
    {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->ability = "user";
    }

    // User módosítás admin által
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

    // User módosítás user által
    protected function fillUserFromRequestWhenUpdateByUser(User $user, $request)
    {
        if ($request->filled('name'))
            $user->name = $request->input('name');

        if ($request->filled('email'))
            $user->email = $request->input('email');

        if ($request->filled('password'))
            $user->password = Hash::make($request->input('password'));
    }

    // Képfeltöltés
    protected function uploadImage(User $user, $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $user->imageUrl = str_replace('public/', '', $file->storeAs('public/userprofile', $user->id . "." . $extension));
        } elseif ($request->filled('imageUrl')) {
            $user->imageUrl = $request->input('imageUrl');
        }
    }
}
