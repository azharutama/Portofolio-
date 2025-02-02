<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;




Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/project', [DashboardController::class, 'showProjects']);
Route::get('/dashboard/skill', [DashboardController::class, 'showSkills']);
Route::get('/dashboard/project/create', [DashboardController::class, 'createProjects']);
Route::get('/dashboard/skill/create', [DashboardController::class, 'createSkills']);
Route::get('/dashboard/project/update', [DashboardController::class, 'updateProjects']);
Route::get('/dashboard/skill/update', [DashboardController::class, 'Skilupdatels']);
Route::get('/dashboard/project/delete', [DashboardController::class, 'deleteProjects']);
Route::get('/dashboard/skill/delete', [DashboardController::class, 'deleteSkills']);
Route::get('/dashboard/contact', [DashboardController::class, 'showContact']);

Route::get('/', [MainController::class, 'index']);
