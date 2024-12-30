<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/aboutus', function () {
    return view('pages.aboutus');
})->name('aboutus');
