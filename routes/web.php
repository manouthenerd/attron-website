<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'home');

Route::view('/about', 'about');

Route::view('/contact', 'contact');

Route::view('/services', 'services');