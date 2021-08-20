<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    /**
     * Login user
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Logout user
     */
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye! See ya next time');
    }



}
