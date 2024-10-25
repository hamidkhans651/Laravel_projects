<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Home page route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard route
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->name('dashboard');

// Another example page
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');
