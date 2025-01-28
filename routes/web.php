<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;




Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', [MainController::class, 'index']);
