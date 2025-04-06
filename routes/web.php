<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', [MainController::class, 'index']);

Route::post('/', [MainController::class, 'storeContact'])->name('contact.store');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/project', [DashboardController::class, 'showProject'])->name('dashboard.project');
Route::get('/dashboard/skill', [DashboardController::class, 'showSkill'])->name('dashboard.skill');
Route::get('/dashboard/achievement', [DashboardController::class, 'showAchievement']);
Route::get('/dashboard/contact', [DashboardController::class, 'showContact']);


Route::get('/dashboard/project/create', [DashboardController::class, 'createProjects'])->name('projects.create');
Route::get('/dashboard/skill/create', [DashboardController::class, 'createSkills'])->name('skills.create');
Route::post('/dashboard/project/store', [DashboardController::class, 'storeProjects'])->name('dashboard.project.store');
Route::post('/dashboard/skill/create', [DashboardController::class, 'storeSkills']);
Route::get('/dashboard/achievement/create', [DashboardController::class, 'createAchievement'])->name('achievement.create');
Route::post('/dashboard/achievement/store', [DashboardController::class, 'storeAchievement'])->name('dashboard.achievement.store');

Route::get('/dashboard/project/update/{id}', [DashboardController::class, 'updateProjects'])->name('projects.edit');
Route::get('/dashboard/skill/update/{id}', [DashboardController::class, 'updateSkills'])->name('skills.edit');
Route::post('/dashboard/project/update/{id}', [DashboardController::class, 'storeUpdateProjects']);
Route::post('/dashboard/skill/update/{id}', [DashboardController::class, 'storeUpdateSkills']);
Route::get('/dashboard/achievement/update/{id}', [DashboardController::class, 'updateAchievement'])->name('achievement.edit');
Route::post('/dashboard/achievement/update/{id}', [DashboardController::class, 'storeUpdateAchievement']);

Route::get('/dashboard/project/{id}', [DashboardController::class, 'deleteProjects'])->name('projects.destroy');
Route::get('/dashboard/skill/{id}', [DashboardController::class, 'deleteSkills'])->name('skills.destroy');
Route::get('/dashboard/contact/{id}', [DashboardController::class, 'deleteContact'])->name('contact.destroy');
Route::get('/dashboard/achievement/{id}', [DashboardController::class, 'deleteAchievement'])->name('achievement.destroy');
