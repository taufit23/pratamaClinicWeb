<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Pasien;
use App\Models\RekamMedis;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DokterPasienController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/Dokter/Pasien/Index', [
                'pasiens' => Pasien::with('user')
                    ->where('name', 'LIKE', '%' . $request->cari . '%')
                    ->get(),
            ]);
        } else {
            return Inertia::render('V1/Private/Dokter/Pasien/Index', [
                'pasiens' => Pasien::with('user')->get(),
            ]);
        }
    }
    public function show(User $user)
    {
        $rekam_medis = RekamMedis::where('user_id', $user->id)->orderBy('created_at', 'desc')->with('user', 'dokter')->get();
        return Inertia::render('V1/Private/Dokter/Pasien/Show', [
            'user' => $user,
            'pasien' => Pasien::where('user_id', $user->id)->first(),
            'rekam_mediss' => $rekam_medis
        ]);
    }
    public function addmedicalrecord(User $user)
    {
        return Inertia::render('V1/Private/Dokter/Pasien/Show');
    }

    public function detail_rekam_medis(User $user, $rekam_medis_id)
    {
        return Inertia::render('V1/Private/Dokter/Pasien/ShowRekamMedis', [
            'user' => $user,
            'rekam_medis' => RekamMedis::findOrFail($rekam_medis_id),
            'pasien' => Pasien::where('user_id', $user->id)->first()
        ]);
    }
    public function editRekamMedis(User $user, $rekamMedisId)
    {
        return Inertia::render('V1/Private/Dokter/Pasien/EditRekamMedis', [
            'user' => $user,
            'rekam_medis' => RekamMedis::findOrFail($rekamMedisId),
            'pasien' => Pasien::where('user_id', $user->id)->first(),
            'layanans' => Layanan::all()
        ]);
    }
    public function updateRekamMedis(User $user, $rekamMedisId, Request $request)
    {
        $request->validate([
            'tanggal_periksa' => 'required|date',
            'keluhans' => 'required|array',
            'diagnosas' => 'required|array',
            'jenis_penyakit' => 'required|array',
            'layanans' => 'required|array',
        ]);
        $rekam_medis = RekamMedis::findOrFail($rekamMedisId);
        $rekam_medis->dokter_id = auth()->user()->dokter->id;
        $rekam_medis->keluhan = $request->keluhans;
        $rekam_medis->diagnosa = $request->diagnosas;
        $rekam_medis->jenis_penyakit = $request->jenis_penyakit;
        $rekam_medis->layanan()->sync($request->layanans);
        $rekam_medis->save();
        return redirect()->route('dokter.pasien.updateRekamMedis', [$user->id, $rekamMedisId]);
    }
}
