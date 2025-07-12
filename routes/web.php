<?php

use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HalamanUtamaController::class, 'index']);
Route::get('/about', [HalamanUtamaController::class, 'about']);
Route::get('/nasional', [SalesController::class, 'nasional']);
Route::get('/CM01', [SalesController::class, 'CM01']);
Route::get('/CM02', [SalesController::class, 'CM02']);
