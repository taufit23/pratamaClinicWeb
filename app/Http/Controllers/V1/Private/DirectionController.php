<?php

namespace App\Http\Controllers\V1\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function back()
    {
        return redirect()->back();
    }
}
