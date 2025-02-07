<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EstimationFormController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::post('/', EstimationFormController::class);

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', ContactFormController::class);

Route::view('/services', 'services')->name('services');