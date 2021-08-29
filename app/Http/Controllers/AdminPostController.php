<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Validation\Rule;


class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts');
    }


    public function create()
    {
        return view('admin.create', [
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
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => 'required|image'
        ]);

       $attributes['user_id'] = auth()->id();

       $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');

       Post::create($attributes);

       return redirect('/')->with('success', 'Post created successfully');


    }
}
