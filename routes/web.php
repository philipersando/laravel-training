<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.login');
})->name('login');

Route::get('/registration', function () {
    return view('user.registration');
})->name('registration');
