<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminLayananController extends Controller
{
    public function index()
    {
        return Inertia::render('V1/Private/Layanan/Index');
    }
}
