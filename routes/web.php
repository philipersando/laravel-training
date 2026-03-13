<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('login');
    Route::get('/registration', [UserController::class, 'create'])->name('registration');
    Route::post('/registration', [UserController::class, 'store'])->name('process_registration');
});
