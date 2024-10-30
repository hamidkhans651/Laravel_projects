<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// // Dashboard route
// Route::get('/dashboard', function () {
//     return view('layouts.dashboard');
// })->name('dashboard');

// // about page
// Route::get('/about', function () {
//     return view('layouts.about');
// })->name('about');


// // about page
// Route::get('/about', function () {
//     return view('layouts.about');
// })->name('about');

// // contact page
// Route::get('/contact', function () {
//     return view('layouts.contact');
// })->name('contact');


// // Properties page
// Route::get('/Properties', function () {
//     return view('layouts.Properties');
// })->name('Properties');


// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');


// Route::get('/menu', function () {
//     return view('layouts.menu');
// })->name('menu');

// Route::get('/sell', function () {
//     return view('layouts.sell');
// })->name('sell');

// Route::get('/navbar', function () {
//     return view('layouts.navbar');
// })->name('navbar');






Route::get('/contact', function () {
    return view('contact');  // Maps to contact.blade.php
});

Route::get('/properties', function () {
    return view('properties');  // Maps to properties.blade.php
});

Route::get('/properties-details', function () {
    return view('properties-details');  // Maps to properties-details.blade.php
});
