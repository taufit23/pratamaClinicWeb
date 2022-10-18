<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDataDokterController extends Controller
{
    public function index()
    {
        return Inertia::render('V1/Private/DataDokter/Index',[
            'dokters' => Dokter::all()
        ]);
    }
    public function craete ()
    {
        return Inertia::render('V1/Private/DataDokter/Create');
    }
}
