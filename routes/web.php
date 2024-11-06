<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropertyController;


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


// Route::get('/menu', function () {
//     return view('layouts.menu');
// })->name('menu');

// Route::get('/sell', function () {
//     return view('layouts.sell');
// })->name('sell');

// Route::get('/navbar', function () {
//     return view('navbar');
// })->name('navbar');



// Display all properties
Route::get('/properties', [PropertyController::class, 'index'])->name('properties');

// Display a single property by ID
Route::get('/property-details/{id}', [PropertyController::class, 'show'])->name('property-details');



Route::get('/contact', function () {
    return view('contact');  // Maps to contact.blade.php
})->name('contact');

Route::get('/properties', function () {
    return view('properties');  // This will load `properties.blade.php`
})->name('properties');

Route::get('/property-details', function () {
    return view('property-details');  // Maps to properties==-details.blade.php
})->name('property-details');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('Property',[PropertyController::class,'Property']);

// Route::get('search',[PropertyController::class,'search' ]);

Route::get('/search', [PropertyController::class, 'search'])->name('search');


Route::get('/search-results', function () {
    return view('search-results');
})->name('search-results');


// routes/web.php



Route::get('/properties', [PropertyController::class, 'index'])->name('properties');
