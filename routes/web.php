<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('pages.home');
})->middleware('auth');

// Route::get('/tes', function () {
//     return view('pages.tes');
// })->middleware('auth');


Route::get('/landing', function () {
    return view('pages.landingPage');
})->middleware('guest')->name('login');

Route::get('/signin',[UserController::class, 'index'])->middleware('guest');
Route::post('/signin/auth', [UserController::class,'authenticate']);

Route::get('/signup',[UserController::class, 'signup'])->middleware('guest');
Route::post('/signup/auth', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'signout']);
