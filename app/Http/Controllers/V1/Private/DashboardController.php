<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\RekamMedis;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return Inertia::render('V1/Private/Dashboard/DashboardAdmin', [
                'role' => auth()->user()->role,
                'users_admin' => User::where('role', 'admin')->get(),
                'users_dokter' => User::where('role', 'dokter')->get(),
                'users_dokter_gigi' => User::where('role', 'dokter')->whereRelation('dokter', 'bidang', 'gigi')->get(),
                'users_dokter_umum' => User::where('role', 'dokter')->whereRelation('dokter', 'bidang', 'umum')->get(),
                'users_dokter_kandungan' => User::where('role', 'dokter')->whereRelation('dokter', 'bidang', 'kebidanan & kandungan')->get(),
                'users_pasien' => User::where('role', 'pasien')->get(),
                'rekam_medis_all' => RekamMedis::all(),
                'pembayaran_lunas' => Pembayaran::where('status_bayar', 'lunas')->get(),
                'pembayaran_belum_lunas' => Pembayaran::where('status_bayar', null)->get(),
            ]);
        } elseif (auth()->user()->role == 'dokter') {
            return Inertia::render('V1/Private/Dashboard/DashboardDokter', [
                'role' => auth()->user()->role,
                'users_admin' => User::where('role', 'admin')->get(),
                'users_pasien' => User::where('role', 'pasien')->get(),
                'rekam_medis_all' => RekamMedis::all(),
                'my_rekam_medis' => RekamMedis::where('dokter_id', auth()->user()->dokter->id)->get(),
            ]);
        } else {
            return Inertia::render('V1/Private/Dashboard/DashboardPasien', [
                'role' => auth()->user()->role,
                'users_admin' => User::where('role', 'admin')->get(),
                'users_dokter' => User::where('role', 'dokter')->get(),
                'dokter_gigi' => User::where('role', 'dokter')->whereRelation('dokter', 'bidang', 'gigi')->get(),
                'dokter_umum' => User::where('role', 'dokter')->whereRelation('dokter', 'bidang', 'umum')->get(),
                'dokter_kandungan' => User::where('role', 'dokter')->whereRelation('dokter', 'bidang', 'kebidanan & kandungan')->get(),
                'my_rekam_medis' => RekamMedis::where('user_id', auth()->user()->id)->get(),
            ]);
        }
    }
}
