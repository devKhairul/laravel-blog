<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class AuthorController extends Controller
{
    public function show(User $author)
    {
        return view('author', [
            'posts' => $author->posts->load('category'),
            'categories' => Category::all(),
        ]);
    }
}
