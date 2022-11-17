<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\RekamMedis;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminRekamMedisController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            return Inertia::render('V1/Private/Admin/RekamMedis/Index', [
                'rekam_medis' => RekamMedis::with('user', 'dokter', 'layanan', 'pasien')->where('tanggal_periksa', 'LIKE', '%' . $request->cari . '%')->orWhereRelation('pasien', 'name', 'LIKE', '%' . $request->cari . '%')->get(),
            ]);
        } else {
            return Inertia::render('V1/Private/Admin/RekamMedis/Index', [
                'rekam_medis' => RekamMedis::with('user', 'dokter', 'layanan', 'pasien')->get(),
            ]);
        }
    }
    public function pembayaran(User $user, RekamMedis $rekamMedis)
    {
        return Inertia::render('V1/Private/Admin/RekamMedis/pembayaran');
    }
    public function pembayaran_lunas(User $user, RekamMedis $rekamMedis)
    {
        $pembayaran = Pembayaran::where('rekam_medis_id', $rekamMedis->id)->first();
        $pembayaran->status_bayar = 'lunas';
        $pembayaran->save();
        return redirect()->route('admin.pasien.showMedicalRecord', [$user->id, $rekamMedis->id])->with([
            'toast' => [
                'type' => 'error',
                'message' => 'Data pemmbayaran dilunasi'
        ]]);
    }
}
