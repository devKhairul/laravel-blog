<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Validation\Rule;

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
        return view('create', [
            'categories' => Category::all(),
        ]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'title' => 'required|max:60',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required|max:30',
            'body' => 'required|min:100|max:1000',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

       $attributes['user_id'] = auth()->id();

       Post::create($attributes);

       return redirect('/')->with('success', 'Post created successfully');


    }
}
