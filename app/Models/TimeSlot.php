<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $table = "TimeSlots";

    protected $casts = [
        'isSynced' => 'boolean'
    ];

    public function minutePulses()
    {
        return $this->hasMany(MinutePulse::class, 'timeSlotId', 'id');
    }

    public function screenshots()
    {
        return $this->hasMany(Screenshot::class, 'timeSlotId', 'id');
    }
}
