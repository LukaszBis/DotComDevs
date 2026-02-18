<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/onas', 'onas')->name('onas');
Route::view('/zespol', 'zespol')->name('zespol');
Route::view('/strony-internetowe', 'strony')->name('strony');
Route::view('/sklepy-internetowe', 'sklepy')->name('sklepy');
Route::view('/blog', 'blog')->name('blog');
Route::view('/kontakt', 'kontakt')->name('kontakt');
Route::view('/wycena', 'wycena')->name('wycena');

