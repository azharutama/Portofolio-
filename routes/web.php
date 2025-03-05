<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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
Route::get('/login', [LoginController::class, 'index']);

Route::post('/dashboard/project', [DashboardController::class, 'storeProjects']);
Route::post('/dashboard/skill', [DashboardController::class, 'storeSkills']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/dashboard/contact', [DashboardController::class, 'storeContact']);
Route::post('/dashboard/project/update', [DashboardController::class, 'storeUpdateProjects']);
Route::post('/dashboard/skill/update', [DashboardController::class, 'storeUpdateSkills']);



Route::get('/', [MainController::class, 'index']);
