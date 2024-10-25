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

// about page
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');


// about page
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

// contact page
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');


// Properties page
Route::get('/Properties', function () {
    return view('layouts.Properties');
})->name('Properties');

