<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    /**
     *
     * Return Log in view
     */
    public function index()
    {
        return view('auth.login');
    }



    /**
     *
     * Process log in request
     */

    public function login()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if ( auth()->attempt($attributes) ) {

            session()->regenerate();

            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);
    }



    /**
     *
     * Logout user
     */
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye! See ya next time');
    }



}
