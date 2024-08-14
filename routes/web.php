<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $user = Auth::user();
    if ($user) {
        $posts = $user->usersPosts()->latest()->get();
    } else {
        $posts = collect(); // Return an empty collection if no user is authenticated
    }
    return view('home', ['posts' => $posts]);
});

/**
 * first one is Controller class
 * second is name of method
 */
Route::post('/register', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/create-post', [PostController::class, 'createPost']);

