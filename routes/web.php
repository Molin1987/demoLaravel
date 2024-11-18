<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showRegForm'])->name('reg'); 
Route::post('/', [AuthController::class, 'Reg']);  

Route::get('/log', [AuthController::class, 'showLoginForm'])->name('log'); 
Route::post('/log', [AuthController::class, 'Log']);  

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');