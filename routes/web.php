<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/onas', 'onas')->name('onas');
Route::view('/zespol', 'zespol')->name('zespol');
Route::view('/strony-internetowe', 'strony')->name('strony');
Route::view('/sklepy-internetowe', 'sklepy')->name('sklepy');
Route::view('/kontakt', 'kontakt')->name('kontakt');
Route::view('/wycena', 'wycena')->name('wycena');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login', 'login')->name('login.process');

    Route::get('/register', 'showRegister')->name('register');
    Route::post('/register', 'register')->name('register.process');
    
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::middleware('auth')->group(function () {
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
});