<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
/* ....hiányzik a logout függvény*/


    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
     
        return $user->createToken("MovieCorner", explode(',', $user->ability));
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
    public function store(StoreUserRequest $request)
    {
        $user = new User();
/* ....részletek hiányoznak */

        $user->ability = "user";

        $user->save();
        return $user;

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
        if($request->name != "") $user->name = $request->name;

        /* ....részletek hiányoznak */

        if($request->ability == "admin")
            $user->ability = "admin,moderator,user";
        elseif($request->ability == "moderator")
            $user->ability = "moderator,user";
        else
            $user->ability = "user";


        $user->save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return true;
    }}
