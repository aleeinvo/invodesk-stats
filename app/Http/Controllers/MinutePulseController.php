<?php

namespace App\Http\Controllers;

use App\Models\MinutePulse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MinutePulseController extends Controller
{
    public function index()
    {
        $pulses = MinutePulse::orderByDesc('minuteTime')->get();

        return Inertia::render('Pulses', [
            'pulses' => $pulses,
            'total' => $pulses->count()
        ]);
    }
}
