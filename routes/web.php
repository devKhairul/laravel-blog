<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PostController::class, 'index'] );
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('category/{category:slug}', [CategoryController::class, 'show']);

// Route::get('category/{category:slug}', function(Category $category) {
//     return view('category', [
//         'posts' => $category->posts->load('user', 'category'),
//         'categories' => Category::all(),
//         'currentCategory'=> $category
//     ]);
// });

Route::get('author/{author:username}', function(User $author) {
    return view('author', [
        'posts' => $author->posts->load('category'),
        'categories' => Category::all(),
    ]);
});
