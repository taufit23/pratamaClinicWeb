<?php

namespace App\Http\Controllers\V1\Public;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\RekamMedis;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        // $now = Carbon::now();
        // dd($now->isoFormat('dddd D'));
        // $loog = Pembayaran::where('updated_at', 'LIKE', '%' . '10' . '%')->get();
        // dd($loog);

        return Inertia::render('V1/Public/Home/Index');
    }
}
