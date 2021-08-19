<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PostController::class, 'index'] );

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy']);

// Route::get('author/{author:username}', [AuthorController::class, 'show']);

// Route::get('category/{category:slug}', [CategoryController::class, 'show']);


