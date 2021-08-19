<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.create');
    }

    public function create(Request $request)
    {
        $attributes = $request->validate([
            'username' => 'required|min:4|max:20|unique:users,username',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed|alpha_num'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Account created succesfully. You can now log in');
    }

}
