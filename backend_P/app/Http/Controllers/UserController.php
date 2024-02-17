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
        $this->validateUserRequest($request);

        $user = new User();
        $this->fillUserFromRequest($user, $request);
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
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }

        $this->fillUserFromRequest($user, $request);
        $this->uploadImage($user, $request);

        $user->save();

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

    protected function validateUserRequest($request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'imageUrl' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    }

    // protected function fillUserFromRequest(User $user, $request)
    // {
    //     $user->email = $request->input('email');
    //     $user->password = Hash::make($request->input('password'));

    //     // További attribútumok feltöltése a request alapján
    // }

    protected function fillUserFromRequest(User $user, $request)
    {
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        if ($request->has('ability')) {
            $validAbilities = ['admin', 'moderator', 'user']; // Helyettesítse a megfelelő értékekkel
            if (in_array($request->input('ability'), $validAbilities)) {
                $user->ability = $request->input('ability');
            } else {
                // Hibaüzenetet küldünk, ha az ability érvénytelen
                throw new \Exception('Invalid ability provided');
            }
        }
    }

    protected function uploadImage(User $user, $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $user->imageUrl = str_replace('public/', '', $file->storeAs('public', $user->name . "." . $extension));
        } elseif ($request->filled('imageUrl')) {
            $user->imageUrl = $request->input('imageUrl');
        }
    }
}
