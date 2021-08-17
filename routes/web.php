<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->with('category', 'user')->get(),
        'categories' => Category::all(),
    ]);
});

Route::get('posts/{post:slug}', function(Post $post) {
    return view('post', [
        'post' => $post,
        'categories' => Category::all(),
    ]);
});

Route::get('category/{category:slug}', function(Category $category) {
    return view('category', [
        'posts' => $category->posts->load('user', 'category'),
        'categories' => Category::all(),
    ]);
});

Route::get('author/{author:username}', function(User $author) {
    return view('author', [
        'posts' => $author->posts->load('category'),
        'categories' => Category::all(),
    ]);
});
