<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/project', [DashboardController::class, 'showProjects']);
Route::get('/dashboard/skill', [DashboardController::class, 'showSkills']);
Route::get('/dashboard/contact', [DashboardController::class, 'showContact']);

Route::get('/dashboard/project/create', [DashboardController::class, 'createProjects']);
Route::get('/dashboard/skill/create', [DashboardController::class, 'createSkills']);
Route::post('/dashboard/project', [DashboardController::class, 'storeProjects']);
Route::post('/dashboard/skill', [DashboardController::class, 'storeSkills']);
Route::post('/dashboard/contact', [DashboardController::class, 'storeContact']);

Route::get('/dashboard/project/update/{id}', [DashboardController::class, 'updateProjects']);
Route::get('/dashboard/skill/update/{id}', [DashboardController::class, 'updateSkills']);
Route::post('/dashboard/project/update/{id}', [DashboardController::class, 'storeUpdateProjects']);
Route::post('/dashboard/skill/update/{id}', [DashboardController::class, 'storeUpdateSkills']);

Route::delete('/dashboard/project/{id}', [DashboardController::class, 'deleteProjects'])->name('projects.destroy');
Route::delete('/dashboard/skill/{id}', [DashboardController::class, 'deleteSkills'])->name('skills.destroy');
Route::delete('/dashboard/contact/{id}', [DashboardController::class, 'deleteContact'])->name('contact.destroy');
