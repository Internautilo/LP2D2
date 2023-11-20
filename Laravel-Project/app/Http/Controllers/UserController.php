<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'name' => 'string|required',
            'email' => 'string|required',
            'password' => 'string|required',
        ]);

        $user = new User;

        $user->name = $validatedRequest['name'];
        $user->email = $validatedRequest['email'];
        $user->password = bcrypt($validatedRequest['password']);

        $user->save();

        return redirect()->route('user_signup')->with('success', 'Usuario cadastrado com successo');
    }

    public function login(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
