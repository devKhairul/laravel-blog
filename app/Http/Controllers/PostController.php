<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Facade\FlareClient\Http\Response;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->posts(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'categories' => Category::all(),
            'currentCategory'=> Category::firstWhere('slug', request('category'))
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function create()
    {
        return view('create');
    }
}
