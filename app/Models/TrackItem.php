<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackItem extends Model
{
    use HasFactory;

    protected $table = "TrackItems";

    public $incrementing = false;
    protected $keyType = 'string';
}
