<?php

use App\Http\Controllers\V1\Private\DashboardController;
use App\Http\Controllers\V1\Public\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// public
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// private

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
Route::middleware('auth', 'verified')->group(function () {
    Route::prefix('private')->group(function (){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    });
});

// V1 Auth
require __DIR__.'/V1/auth.php';
