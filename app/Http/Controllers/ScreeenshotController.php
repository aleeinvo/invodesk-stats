<?php

namespace App\Http\Controllers;

use App\Models\Screenshot;
use Illuminate\Http\Request;

class ScreeenshotController extends Controller
{
    public function index()
    {
        return Screenshot::all();
    }
}
