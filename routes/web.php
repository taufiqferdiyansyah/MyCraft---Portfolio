<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\PortfolioController;

// Dashboard Admin
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

// Rute untuk portfolio di dalam admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('portfolio', AdminPortfolioController::class);
    Route::resource('contact', AdminContactController::class);
    Route::get('settings', [AdminSettingsController::class, 'index'])->name('settings.index');
});

// Halaman Utama
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::post('/portfolio/contact', [PortfolioController::class, 'submitContactForm'])->name('portfolio.contact');