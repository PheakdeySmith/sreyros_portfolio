<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\EventController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');

    // Projects
    Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);

    // Personal Info
    Route::get('/personal-info', [App\Http\Controllers\Admin\PersonalInfoController::class, 'edit'])->name('personal_info.edit');
    Route::put('/personal-info', [App\Http\Controllers\Admin\PersonalInfoController::class, 'update'])->name('personal_info.update');

    // Skills
    Route::resource('skills', App\Http\Controllers\Admin\SkillController::class);

    // Services
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);

    // Testimonials
    Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);

    // Social Links
    Route::resource('social-links', App\Http\Controllers\Admin\SocialLinkController::class)->parameters([
        'social-links' => 'socialLink'
    ]);

    // Events
    Route::resource('events', App\Http\Controllers\Admin\EventController::class);
    Route::get('/calendar', [App\Http\Controllers\Admin\EventController::class, 'calendar'])->name('calendar');
    Route::get('/get-events', [App\Http\Controllers\Admin\EventController::class, 'getEvents'])->name('get-events');
});
