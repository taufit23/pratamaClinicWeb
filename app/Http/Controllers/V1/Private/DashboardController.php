<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('V1/Private/Dashboard/Index', [
            'role' => auth()->user()->role
        ]);
    }
}
