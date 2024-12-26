<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/aboutus', function () {
    return view('pages.aboutus');
});
