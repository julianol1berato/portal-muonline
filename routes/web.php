<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

/* Route::get('/', function () {
    return view('welcome');
}); */
