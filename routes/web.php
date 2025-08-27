<?php

use Illuminate\Support\Facades\Route;

// Route::get('/acceuil', function () {
//     return view('welcome');
// });

route::view ('/second','second');

route::view ('/','home')->name('home');

Route::view('/contactez-nous', 'contact')->name('contact');

Route::view('/about', 'about')->name('about');
