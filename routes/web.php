<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\WelcomePropertiesController;
use App\Http\Controllers\dashboardcontroller;



Route::get('/', function () {
    return view('welcome');
});



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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');



Route::get('/Addproperties', function () {
    return view('Addproperties');
})->name('Addproperties');

Route::get('Property', [PropertyController::class, 'Property']);

// Route::get('search',[PropertyController::class,'search' ]);

Route::get('/search', [PropertyController::class, 'search'])->name('search');


Route::get('/search-results', function () {
    return view('search-results');
})->name('search-results');


// routes/web.php



Route::get('/properties', [PropertyController::class, 'index'])->name('properties');


// use form for adding properties 


Route::get('/', [WelcomePropertiesController::class, 'index'])->name('welcome');


Route::get('/dashboard', [dashboardcontroller::class, 'index'])->name('dashboard');


// chat routes 

Route::get('/index', 'App\Http\Controllers\PusherController@index');
Route::post('/broadcast', 'App\Http\Controllers\PusherController@broadcast');
Route::post('/receive', 'App\Http\Controllers\PusherController@receive');



Route::get('/properties', [PropertyController::class, 'index'])->name('properties');
Route::get('/properties/search', [PropertyController::class, 'search'])->name('search');
Route::get('/api/properties', [PropertyController::class, 'getAllProperties']);

Route::get('/index', function () {
    return view('index');  // Maps to contact.blade.php
})->name('index');



Route::get('/search', [PropertyController::class, 'search']);
