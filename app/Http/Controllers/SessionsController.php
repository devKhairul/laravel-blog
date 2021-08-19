<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye! See ya next time');
    }
}
