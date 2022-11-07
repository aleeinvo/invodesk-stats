<?php

namespace App\Http\Controllers;

use App\Models\TrackItem;
use Illuminate\Http\Request;

class ActiveWindowController extends Controller
{
    public function index()
    {
        return TrackItem::all();
    }
}
