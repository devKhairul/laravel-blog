<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Validation\Rule;


class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts', [
            'posts' => Post::all()->where('user_id', auth()->id())
        ]);
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
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required|max:30',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => 'required|image'
        ]);

       $attributes['user_id'] = auth()->id();

       $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');

       Post::create($attributes);

       return redirect('/')->with('success', 'Post created successfully');

    }

    public function edit(Post $post)
    {
        return view('admin.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required|max:30',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => 'image'
        ]);


        if ( isset($attributes['thumbnail']) ) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }


       $post->update($attributes);

       return redirect('/')->with('success', 'Post updated successfully');
    }
}
