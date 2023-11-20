<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $credentials = $request->validate([
            'email' => ['string', 'required'],
            'password' => ['string', 'required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return redirect()->route('user_login')->withErrors('email', 'Usuario não encontrado')->onlyInput('email');
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
