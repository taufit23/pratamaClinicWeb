<?php

use App\Http\Controllers\V1\Auth\LogoutController;
use App\Http\Controllers\V1\Private\DashboardController;
use App\Http\Controllers\V1\Private\ProfileController;
use App\Http\Controllers\V1\Private\RekamMedisController;
use App\Http\Controllers\V1\Public\HomeController;
use Illuminate\Support\Facades\Route;


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
        // global private
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        // logout
        Route::post('logout', [LogoutController::class, 'store'])->name('logout.store');
        Route::prefix('pasien')->group(function ()
        {
            Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
            Route::get('rekam_medis', [RekamMedisController::class, 'index'])->name('rekam_medis.index');
        });
    });
});

// V1 Auth
require __DIR__.'/V1/auth.php';