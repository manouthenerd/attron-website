<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function() {
    return view('admin.index');
});

Route::get('/login', function () {

    return view('auth.login');
})->name('login');