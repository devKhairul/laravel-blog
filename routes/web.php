<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PostController::class, 'index'] );

Route::get('ping', function () {
    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us5'
    ]);

    $response = $mailchimp->lists->addListMember('98f346c61e', [
        'email_address' => 'mypersonalaccount@gmail.com',
        'status' => 'subscribed'
    ]);

    ddd($response);
});

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'create'])->middleware('guest');
Route::get('login', [SessionsController::class, 'index'])->middleware('guest');
Route::post('login', [SessionsController::class, 'login'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Route::get('author/{author:username}', [AuthorController::class, 'show']);
// Route::get('category/{category:slug}', [CategoryController::class, 'show']);


