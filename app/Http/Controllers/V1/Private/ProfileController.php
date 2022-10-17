<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function index()
    {
        return Inertia::render('V1/Private/Profile/Index');
    }
}
