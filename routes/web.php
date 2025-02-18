<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
 
Route::get('/siswa', [SiswaController::class, 'index']);
Route::resource('siswa', SiswaController::class);
Route::get('/admin', [AdminController::class, 'index']);
Route::resource('admin', AdminController::class);