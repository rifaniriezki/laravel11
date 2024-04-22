<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rifani Riezki']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/artikel-1', function () {
    return view('artikel-1');
});

Route::get('/blog/artikel-2', function () {
    return view('artikel-2');
});

Route::get('/contact', function () {
    return view('contact');
});
