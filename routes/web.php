<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/o-mnie', 'o-mnie')->name('o-mnie');
Route::view('/oferta', 'oferta')->name('oferta');

Route::get('/kontakt', [ContactController::class, 'show'])->name('kontakt');
Route::post('/kontakt', [ContactController::class, 'store'])->name('kontakt.store');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login', 'login')->name('login.process');
    Route::get('/register', 'showRegister')->name('register');
    Route::post('/register', 'register')->name('register.process');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/panel', [PanelController::class, 'index'])->name('panel');
    Route::patch('/panel/zgloszenia/{contactRequest}', [PanelController::class, 'update'])->name('panel.update');
    Route::delete('/panel/zgloszenia/{contactRequest}', [PanelController::class, 'destroy'])->name('panel.destroy');
});

/*
|--------------------------------------------------------------------------
| Blog - na razie wyłączony
|--------------------------------------------------------------------------
| Kod bloga (kontroler, widoki, tabela posts) zostaje w projekcie.
| Żeby włączyć blog, odkomentuj poniższe trasy i dodaj link w partials/nav.blade.php.
*/
// Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/blog/nowy', [BlogController::class, 'create'])->name('blog.create');
//     Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
// });
// Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); // musi być po /blog/nowy
