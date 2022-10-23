<?php

use App\Http\Controllers\V1\Auth\LogoutController;
use App\Http\Controllers\V1\Private\AdminDataController;
use App\Http\Controllers\V1\Private\AdminDataDokterController;
use App\Http\Controllers\V1\Private\AdminDataPasienController;
use App\Http\Controllers\V1\Private\AdminLayananController;
use App\Http\Controllers\V1\Private\AdminProfileController;
use App\Http\Controllers\V1\Private\AdminRekamMedisController;
use App\Http\Controllers\V1\Private\DashboardController;
use App\Http\Controllers\V1\Private\DokterPasienController;
use App\Http\Controllers\V1\Private\DokterProfileController;
use App\Http\Controllers\V1\Private\DokterRekamMedisController;
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
    Route::prefix('private')->group(function () {
        // global private
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        // logout
        Route::post('logout', [LogoutController::class, 'store'])->name('logout.store');
        // pasien
        Route::prefix('pasien')->group(function () {
            Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
            Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
            Route::get('profile/ubah-password', [ProfileController::class, 'ubah_password'])->name('profile.ubah_password');
            Route::put('profile/update-password', [ProfileController::class, 'update_password'])->name('profile.update_password');
            Route::get('rekam-medis', [RekamMedisController::class, 'index'])->name('rekam_medis.index');
        });
        // admin
        Route::prefix('admin')->group(function () {
            Route::get('profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');
            Route::get('profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
            Route::put('profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');

            // data dokter
            Route::get('data-dokter', [AdminDataDokterController::class, 'index'])->name('admin.dokter.index');
            Route::get('data-dokter/tambah', [AdminDataDokterController::class, 'craete'])->name('admin.dokter.create');
            Route::post('data-dokter/store', [AdminDataDokterController::class, 'store'])->name('admin.dokter.store');
            Route::get('data-dokter/{user}/edit', [AdminDataDokterController::class, 'edit'])->name('admin.dokter.edit');
            Route::put('data-dokter/{user}/update', [AdminDataDokterController::class, 'update'])->name('admin.dokter.update');
            Route::get('data-dokter/{user}/lupa-password', [AdminDataDokterController::class, 'lupa_password'])->name('admin.dokter.lupa_password');
            Route::put('data-dokter/{user}/lupa-password', [AdminDataDokterController::class, 'post_new_password'])->name('admin.dokter.post_new_password');

            // data pasien
            Route::get('data-pasien', [AdminDataPasienController::class, 'index'])->name('admin.pasien.index');
            Route::get('{user}/data-pasien', [AdminDataPasienController::class, 'show'])->name('admin.pasien.show');

            // medical record
            Route::get('rekam-medis', [AdminRekamMedisController::class, 'index'])->name('admin.rekamMedis.index');
            Route::get('{user}/data-pasien/add-medical-record', [AdminDataPasienController::class, 'addMedicalRecord'])->name('admin.pasien.addMedicalRecord');
            Route::post('{user}/data-pasien/add-medical-record', [AdminDataPasienController::class, 'storeMedicalRecord'])->name('admin.pasien.storeMedicalRecord');
            Route::get('{user}/data-pasien/{rekam_medis}/medical-record', [AdminDataPasienController::class, 'showMedicalRecord'])->name('admin.pasien.showMedicalRecord');

            Route::get('data-pasien/tambah', [AdminDataPasienController::class, 'create'])->name('admin.pasien.create');
            Route::post('data-pasien/store', [AdminDataPasienController::class, 'store'])->name('admin.pasien.store');

            Route::get('data-pasien/{user}/lupa-password', [AdminDataPasienController::class, 'lupa_password'])->name('admin.pasien.lupa_password');
            Route::put('data-pasien/{user}/new-password', [AdminDataPasienController::class, 'new_password'])->name('admin.pasien.new_password');

            // data layanan
            Route::get('layanan', [AdminLayananController::class, 'index'])->name('admin.layanan.index');
            Route::get('layanan/create', [AdminLayananController::class, 'create'])->name('admin.layanan.create');
            Route::post('layanan/store', [AdminLayananController::class, 'store'])->name('admin.layanan.store');
            Route::get('{layanan}/layanan/edit', [AdminLayananController::class, 'edit'])->name('admin.layanan.edit');
            Route::put('{layanan}/layanan/update', [AdminLayananController::class, 'update'])->name('admin.layanan.update');
            Route::get('{layanan}/layanan/destroy', [AdminLayananController::class, 'destroy'])->name('admin.layanan.destroy');

            // data admins
            Route::get('admins', [AdminDataController::class, 'index'])->name('admin.admins.index');
            Route::get('admins/create', [AdminDataController::class, 'create'])->name('admin.admins.create');
            Route::post('admins/store', [AdminDataController::class, 'store'])->name('admin.admins.store');
            Route::get('{user}/admin', [AdminDataController::class, 'lupaPassword'])->name('admin.admins.lupaPassword');
            Route::put('{user}/admin', [AdminDataController::class, 'storeLupaPassword'])->name('admin.admins.storeLupaPassword');
            Route::get('{user}/admin/destroy', [AdminDataController::class, 'destroy'])->name('admin.admins.destroy');
        });
        // dokter
        Route::prefix('dokter')->group(function () {
            // profile
            Route::get('profile', [DokterProfileController::class, 'index'])->name('dokter.profile.index');
            Route::get('profile/edit', [DokterProfileController::class, 'edit'])->name('dokter.profile.edit');
            Route::put('profile/update', [DokterProfileController::class, 'update'])->name('dokter.profile.update');
            // data pasien
            Route::get('data-pasien', [DokterPasienController::class, 'index'])->name('dokter.pasien.index');
            Route::get('{user}/data-pasien', [DokterPasienController::class, 'show'])->name('dokter.pasien.show');
            Route::get('{user}/data-pasien/tambah-medical-record', [DokterPasienController::class, 'addmedicalrecord'])->name('dokter.pasien.addmedicalrecord');

            // rekam medis
            Route::get('{user}/rekammedis/{rekammedis}', [DokterPasienController::class, 'detail_rekam_medis'])->name('dokter.pasien.rekam_medis');
            Route::get('{user}/rekammedis/{rekammedis}/layani-pasien', [DokterPasienController::class, 'editRekamMedis'])->name('dokter.pasien.editRekamMedis');
            Route::put('{user}/rekammedis/{rekammedis}/layani-pasien', [DokterPasienController::class, 'updateRekamMedis'])->name('dokter.pasien.updateRekamMedis');

            // single menu data medis
            Route::get('/rekam-medis', [DokterRekamMedisController::class, 'index'])->name('dokter.rekam_medis.index');
        });
    });
});

// V1 Auth
require __DIR__ . '/V1/auth.php';
