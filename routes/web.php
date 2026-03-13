<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function (){
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'authenticate'])->name('process_login');
    Route::get('/registration', [UserController::class, 'create'])->name('registration');
    Route::post('/registration', [UserController::class, 'store'])->name('process_registration');
});


Route::middleware('auth')->group(function (){
    Route::get('/cars', [CarController::class, 'index'])->name('car_list');


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});