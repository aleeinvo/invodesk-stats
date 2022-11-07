<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinutePulse extends Model
{
    use HasFactory;

    protected $table = "MinutePulses";

    public $incrementing = false;
    protected $keyType = 'string';

    protected $casts = [
        'isActive' => 'boolean',
        'isSynced' => 'boolean',
        'isIdle' => 'boolean'
    ];
}
