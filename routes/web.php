<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PostController::class, 'index'] );

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('category/{category:slug}', [CategoryController::class, 'show']);

Route::get('author/{author:username}', [AuthorController::class, 'show']);
