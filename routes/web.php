<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Public routes
Route::get('/', [MainController::class, 'index']);
Route::post('/', [MainController::class, 'storeContact'])->name('contact.store');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Protected routes (only accessible when logged in)
Route::middleware('auth')->group(function () {
  Route::post('/logout', [LoginController::class, 'logout']);
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  // Project
  Route::get('/dashboard/project', [DashboardController::class, 'showProject'])->name('dashboard.project');
  Route::get('/dashboard/project/create', [DashboardController::class, 'createProjects'])->name('projects.create');
  Route::post('/dashboard/project/store', [DashboardController::class, 'storeProjects'])->name('projects.store.create');
  Route::get('/dashboard/project/update/{id}', [DashboardController::class, 'updateProjects'])->name('projects.edit');
  Route::post('/dashboard/project/update/{id}', [DashboardController::class, 'storeUpdateProjects'])->name('projects.store.edit');
  Route::get('/dashboard/project/{id}', [DashboardController::class, 'deleteProjects'])->name('projects.destroy');

  // Skill
  Route::get('/dashboard/skill', [DashboardController::class, 'showSkill'])->name('dashboard.skill');
  Route::get('/dashboard/skill/create', [DashboardController::class, 'createSkills'])->name('skills.create');
  Route::post('/dashboard/skill/create', [DashboardController::class, 'storeSkills'])->name('skills.store.create');
  Route::get('/dashboard/skill/update/{id}', [DashboardController::class, 'updateSkills'])->name('skills.edit');
  Route::post('/dashboard/skill/update/{id}', [DashboardController::class, 'storeUpdateSkills'])->name('skills.store.edit');
  Route::get('/dashboard/skill/{id}', [DashboardController::class, 'deleteSkills'])->name('skills.destroy');

  // Achievement
  Route::get('/dashboard/achievement', [DashboardController::class, 'showAchievement'])->name('dashboard.achievement');
  Route::get('/dashboard/achievement/create', [DashboardController::class, 'createAchievement'])->name('achievement.create');
  Route::post('/dashboard/achievement/store', [DashboardController::class, 'storeAchievement'])->name('achievement.store.create');
  Route::get('/dashboard/achievement/update/{id}', [DashboardController::class, 'updateAchievement'])->name('achievement.edit');
  Route::post('/dashboard/achievement/update/{id}', [DashboardController::class, 'storeUpdateAchievement'])->name('achievement.store.edit');
  Route::get('/dashboard/achievement/{id}', [DashboardController::class, 'deleteAchievement'])->name('achievement.destroy');

  // Contact
  Route::get('/dashboard/contact', [DashboardController::class, 'showContact'])->name('dashboard.contacts');
  Route::get('/dashboard/contact/{id}', [DashboardController::class, 'deleteContact'])->name('contacts.destroy');
});
