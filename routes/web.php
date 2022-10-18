<?php

use App\Http\Controllers\V1\Auth\LogoutController;
use App\Http\Controllers\V1\Private\AdminDataDokterController;
use App\Http\Controllers\V1\Private\AdminProfileController;
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
            Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
            Route::get('profile/ubah_password', [ProfileController::class, 'ubah_password'])->name('profile.ubah_password');
            Route::put('profile/update_password', [ProfileController::class, 'update_password'])->name('profile.update_password');
            Route::get('rekam-medis', [RekamMedisController::class, 'index'])->name('rekam_medis.index');
        });
        Route::prefix('admin')->group(function ()
        {
            Route::get('profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');
            Route::get('profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
            Route::put('profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');

            // data dokter
            Route::get('data-dokter', [AdminDataDokterController::class, 'index'])->name('admin.dokter.index');
            Route::get('data-dokter/tambah', [AdminDataDokterController::class, 'craete'])->name('admin.dokter.create');
        });
    });
});

// V1 Auth
require __DIR__.'/V1/auth.php';