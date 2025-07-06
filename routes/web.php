<?php

use App\Http\Controllers\HalamanUtamaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HalamanUtamaController::class, 'index']);
