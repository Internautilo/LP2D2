<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    /*
    * Logs the user
    */
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

    /*
    * Logs out the user
    */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedRequest = $request->validate([
            'name' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'profile_image' => ['nullable', 'file'],
            'id' => ['nullable', 'string'],

        ]);

        $user = User::find($validatedRequest['id']);

        $name = array_key_exists('name', $validatedRequest);
        $email = array_key_exists('email', $validatedRequest);


        if ($name) {
            $user->name = $validatedRequest['name'];
        }
        if ($email) {
            $user->email = $validatedRequest['email'];
        }
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/users/profiles/', $filename);

            $user->profile_image = $filename;
        }


        $user->save();

        return redirect()->route('account')->with('success', 'Usuário atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
