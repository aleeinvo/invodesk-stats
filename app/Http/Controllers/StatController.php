<?php

namespace App\Http\Controllers;

use App\Http\Resources\TimeSlotResource;
use App\Models\TimeSlot;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StatController extends Controller
{
    public function __invoke()
    {
        $timeSlots = TimeSlot::with(['minutePulses', 'screenshots'])->orderByDesc('id')->get();

        $activeTime = TimeSlot::sum('activeTime');
        $inactiveTime = TimeSlot::sum('inactiveTime');

        $totalTime = CarbonInterval::seconds($activeTime + $inactiveTime)
            ->cascade()
            ->forHumans();

        // return $timeSlots;
        return Inertia::render('Stats', [
            'totalTime' => $totalTime,
            'timeSlots' => $timeSlots
        ]);
    }
}
