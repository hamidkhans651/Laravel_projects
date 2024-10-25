<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Dasboard', function () {
    // return response()->file(public_path('Dashboard.html')) ;
    return view('dasboard');
});



Route::get('/ContactUS', function () {
    return response()->file(public_path('ContactUS.html')) ;
});

Route::get('/Properties', function () {
    return response()->file(public_path('Properties.html')) ;
});