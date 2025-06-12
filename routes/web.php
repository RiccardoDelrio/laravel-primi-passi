<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $informazioni= "ciao a tutti";
    return view('home', compact('informazioni'));
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/history', function () {
    return view('history');
})->name('history');
