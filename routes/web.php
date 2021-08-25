<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PostController::class, 'index'] );

Route::post('newsletter', function (Newsletter $newsletter) {

    request()->validate([
        'email' => 'email|required'
    ]);

    try {
       $newsletter->subscribe(request('email'));

    } catch (Exception $e) {
        throw ValidationException::withMessages([
            'email' => 'Hmm. That email address looks a little fishy. Please try again'
        ]);
    }

    return redirect('/')->with('success', 'Oof Oof! You have been added to our newsletter');
});

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'create'])->middleware('guest');
Route::get('login', [SessionsController::class, 'index'])->middleware('guest');
Route::post('login', [SessionsController::class, 'login'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


