<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/aboutus', function () {
    return view('pages.aboutus');
})->name('aboutus');
