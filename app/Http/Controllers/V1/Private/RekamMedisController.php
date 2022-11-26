<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\RekamMedis;
use App\Models\ResepObat;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RekamMedisController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/Pasien/RekamMedis/Index', [
                'rekam_medis' => RekamMedis::with('user', 'dokter', 'layanan', 'pasien')->where('user_id', auth()->user()->id)->where('tanggal_periksa', 'LIKE', '%' . $request->cari . '%')->orWhereRelation('dokter', 'name', 'LIKE', '%' . $request->cari . '%')->get(),
            ])->with([
                'toast' => [
                    'type' => 'success',
                    'message' => 'Query = ' . $request->cari
            ]]);
        } else {
            return Inertia::render('V1/Private/Pasien/RekamMedis/Index', [
                'rekam_medis' => RekamMedis::with('user', 'dokter', 'layanan', 'pasien')->where('user_id', auth()->user()->id)->get(),
            ]);
        }
    }
    public function show(RekamMedis $rekamMedis)
    {
        // dd(RekamMedis::with('dokter', 'layanan', 'pembayaran')->where('id', $rekamMedis->id)->first());
        return Inertia::render('V1/Private/Pasien/RekamMedis/Show', [
            'rekam_medis' => RekamMedis::with('dokter', 'layanan', 'pembayaran')->where('id', $rekamMedis->id)->first(),
            'resep_obat' => ResepObat::with('obat')->where('rekam_medis_id', $rekamMedis->id)->first(),
            'pembayaran' => Pembayaran::where('rekam_medis_id', $rekamMedis->id)->first()
        ]);
    }
}
