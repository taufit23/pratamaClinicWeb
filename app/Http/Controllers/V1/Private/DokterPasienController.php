<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Pembayaran;
use App\Models\RekamMedis;
use App\Models\ResepObat;
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
            ])->with([
                'toast' => [
                    'type' => 'success',
                    'message' => 'Query ' . $request->cari
            ]]);
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
        $rekam_medis = RekamMedis::findOrFail($rekam_medis_id);
        return Inertia::render('V1/Private/Dokter/Pasien/ShowRekamMedis', [
            'user' => $user,
            'resep_obat' => ResepObat::with('obat')->where('rekam_medis_id', $rekam_medis_id)->first(),
            'rekam_medis' => $rekam_medis,
            'pasien' => Pasien::where('user_id', $user->id)->first(),
            'layanans' => $rekam_medis->layanan,
        ]);
    }
    public function editRekamMedis(User $user, $rekamMedisId)
    {
        return Inertia::render('V1/Private/Dokter/Pasien/EditRekamMedis', [
            'user' => $user,
            'rekam_medis' => RekamMedis::findOrFail($rekamMedisId),
            'pasien' => Pasien::where('user_id', $user->id)->first(),
            'layanans' => Layanan::all(),
            'obat' => Obat::all()
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
            'obat' => 'required|array',
            'total_hari' => 'required',
            'konsumsi_harian' => 'required',
        ]);
        // dd($request);
        $rekam_medis = RekamMedis::findOrFail($rekamMedisId);
        $rekam_medis->dokter_id = auth()->user()->dokter->id;
        $rekam_medis->keluhan = $request->keluhans;
        $rekam_medis->diagnosa = $request->diagnosas;
        $rekam_medis->jenis_penyakit = $request->jenis_penyakit;
        $rekam_medis->layanan()->sync($request->layanans);

        $pembayaran = new Pembayaran();
        $pembayaran->user_id = $user->id;
        $pembayaran->rekam_medis_id = $rekamMedisId;

        $totalStokObat = $request->total_hari * $request->konsumsi_harian;

        $totalBayar = 0;
        $hargaObat = 0;
        foreach ($request->obat as $req) {
            $obatPrice = Obat::findOrFAil($req);
            $obatPrice->update(['stok_obat' => $obatPrice->stok_obat - $totalStokObat]);
            $obatPrice->save();
            $hargaObat += $obatPrice->harga_obat;
            $hargaObat *= $totalStokObat;
        }
        foreach ($rekam_medis->layanan as $layanan) {
            $totalBayar += $layanan->harga_layanan;
        }
        $totalBayar += $hargaObat;
        $resep_obat = new ResepObat();
        $resep_obat->rekam_medis_id = $rekam_medis->id;
        $resep_obat->konsumsi_harian = $request->konsumsi_harian;
        $resep_obat->total_hari = $request->total_hari;
        $resep_obat->save();

        $receipst = ResepObat::where('rekam_medis_id', $rekam_medis->id)->first();
        $receipst->obat()->sync($request->obat);

        $pembayaran->total_bayar = $totalBayar;
        $pembayaran->status_bayar = null;
        $pembayaran->save();
        $rekam_medis->pembayaran_id = $pembayaran->id;
        $rekam_medis->save();
        return redirect()->route('dokter.pasien.rekam_medis', [$user->id, $rekamMedisId])->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Pasien ' . $user->pasien->name . 'dilayani'
        ]]);
    }
}
