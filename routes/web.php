<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IklanController;
use App\Models\Books;
use App\Models\Iklan;

Route::get('/', function () {
    $books = Books::all();
    $iklan = Iklan::first();
    return view('pages.home', compact('books','iklan'));
})->middleware(['auth', 'user']);

Route::get('/landing', function () {
    return view('pages.landingPage');
})->middleware('guest')->name('login');

Route::get('/signin',[UserController::class, 'index'])->middleware('guest');
Route::post('/signin/auth', [UserController::class,'authenticate'])->middleware('guest');

Route::get('/signup',[UserController::class, 'signup'])->middleware('guest');
Route::post('/signup/auth', [UserController::class, 'register'])->middleware('guest');

Route::post('/logout', [UserController::class, 'signout'])->middleware('auth');

Route::get('/profile/setting/{id}', [ProfileController::class, 'index'])->middleware(['auth', 'user']);
Route::put('/profile/setting/{id}/edit', [ProfileController::class, 'edit'])->middleware(['auth', 'user']);

Route::get('/books/buy/{id}', [BooksController::class, 'index'])->middleware(['auth', 'user']);
Route::get('/books/category/{category}', [BooksController::class, 'category'])->middleware(['auth', 'user']);
Route::delete('/books/buy/{id}',[KeranjangController::class, 'buyBook'])->middleware(['auth','user']);

Route::get('/cart/{id}', [KeranjangController::class, 'index'])->middleware(['auth', 'user']);
Route::post('/cart/add-to-cart/{id}', [KeranjangController::class, 'addToCart'])->middleware(['auth', 'user']);
Route::delete('/cart/delete/{id}', [KeranjangController::class, 'deleteItemCart'])->middleware(['auth', 'user']);


Route::post('/admin/update/iklan',[IklanController::class, 'updateIklan'])->middleware(['auth','admin']);
Route::get('/admin/manage-user',[AdminController::class, 'manageUser'])->middleware(['auth','admin']);
Route::delete('/admin/manage-user/delete/{id}',[AdminController::class, 'deleteUser'])->middleware(['auth','admin']);
Route::get('/admin/books/{category}',[AdminController::class, 'index'])->middleware(['auth','admin']);
Route::post('/admin/books/add',[BooksController::class, 'createBook'])->middleware(['auth', 'admin']);
Route::put('/admin/books/edit/{id}',[BooksController::class, 'editBook'])->middleware(['auth','admin']);
Route::delete('/admin/book/delete/{id}',[BooksController::class, 'deleteBook'])->middleware(['auth', 'admin']);
