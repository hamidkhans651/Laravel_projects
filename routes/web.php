<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



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


Route::get('/register', function () {
    return view('auth.register');
})->name('register');




Route::get('/sell', function () {
    return view('layouts.sell');
})->name('sell');


// web.php
use App\Http\Controllers\PropertyController;

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/cities', [PropertyController::class, 'getCities'])->name('properties.cities');
Route::get('/properties/categories', [PropertyController::class, 'getCategories'])->name('properties.categories');
