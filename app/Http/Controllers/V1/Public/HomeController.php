<?php

namespace App\Http\Controllers\V1\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('V1/Public/Home/Index');
    }
}
