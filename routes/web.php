<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/**
 * first one is Controller class
 * second is name of method
 */
Route::post('/register', [UserController::class, 'register']);