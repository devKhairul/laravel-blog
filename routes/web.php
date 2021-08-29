<?php

use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\NewsletterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PostController::class, 'index'] );
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
Route::post('newsletter', NewsletterController::class);

Route::middleware(['admin'])->group(function () {
    Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    Route::get('admin/posts', [AdminPostController::class, 'index']);
    Route::post('admin/posts', [AdminPostController::class, 'store']);
});


Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisterController::class, 'index']);
    Route::post('register', [RegisterController::class, 'create']);
    Route::get('login', [SessionsController::class, 'index']);
    Route::post('login', [SessionsController::class, 'login']);
});

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


