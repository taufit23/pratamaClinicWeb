<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\RekamMedis;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DokterRekamMedisController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/Dokter/RekamMedis/Index', [
                'rekam_medis' => RekamMedis::with('user', 'dokter', 'layanan', 'pasien')->where('tanggal_periksa', 'LIKE', '%' . $request->cari . '%')->orWhereRelation('pasien', 'name', 'LIKE', '%' . $request->cari . '%')->get(),
            ])->with([
                'toast' => [
                    'type' => 'success',
                    'message' => 'Query = ' . $request->cari
            ]]);
        } else {
            return Inertia::render('V1/Private/Dokter/RekamMedis/Index', [
                'rekam_medis' => RekamMedis::with('user', 'dokter', 'layanan', 'pasien')->get(),
            ]);
        }
    }
}
