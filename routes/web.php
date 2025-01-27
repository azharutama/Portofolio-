<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home');
});



Route::get('/dashboard', [DashboardController::class, 'index']);
