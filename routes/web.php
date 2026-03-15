<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentController;
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
    Route::get('/cars/details/{id}', [RentController::class, 'create'])->name('car_rent_details');
    Route::post('/cars/details/', [RentController::class, 'store'])->name('process_car_rent');
    Route::get('/cars/rent/{id}', [RentController::class, 'show'])->name('car_rent_status');
    
    Route::get('/cars/owned', [CarController::class, 'show'])->name('owned_car');
    Route::get('/cars/create', [CarController::class, 'create'])->name('create_car');
    Route::post('/cars/create', [CarController::class, 'store'])->name('store_car');
    Route::get('/cars/owned/rental/', [RentController::class, 'owned_rental'])->name('owned_rental');


    Route::get('/cars/owned/{id}', [CarController::class, 'edit'])->name('edit_owned_car');
    Route::put('/cars/owned/{id}', [CarController::class, 'update'])->name('update_owned_car');



    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});