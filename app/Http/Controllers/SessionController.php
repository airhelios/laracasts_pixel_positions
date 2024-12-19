<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        // Validate the form
        $validatedAttributes = request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        // Attempt to login the user
        if (! Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry those credentials do not match'
            ]);
        }
        // regenerate the session token - görs av säkerhetsskäl. Man skapar ny session när man loggar in
        request()->session()->regenerate();
        // redirect
        return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
