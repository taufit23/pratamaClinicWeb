<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminLoogbookController extends Controller
{
    public function index()
    {
        $period = now()->subMonths(12)->monthsUntil(now());
        $data = [];
        $cashBulanan = [];
        foreach ($period as $date) {
            $loogbulanan =  Pembayaran::where('status_bayar', 'lunas')->where('updated_at', 'LIKE', '%' . $date->format('Y-m') . '%')->get();
            $data[] = [
                'cash' => $loogbulanan->sum('total_bayar'),
                'data' => $loogbulanan,
                'month' => $date->shortMonthName,
                'year' => $date->year,
            ];
        }
        // dd($data);
        return Inertia::render('V1/Private/LoogBook/AdminIndex', [
            'data' => $data
        ]);
    }
}
