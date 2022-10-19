<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
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
}
