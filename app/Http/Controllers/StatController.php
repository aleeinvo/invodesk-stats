<?php

namespace App\Http\Controllers;

use App\Http\Resources\TimeSlotResource;
use App\Models\TimeSlot;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StatController extends Controller
{
    public function __invoke()
    {
        $timeSlots = TimeSlot::with(['minutePulses', 'screenshots'])->orderByDesc('id')->get();

        // return $timeSlots;
        return Inertia::render('Stats', [
            'timeSlots' => $timeSlots
        ]);
    }
}
