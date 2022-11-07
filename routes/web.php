<?php

use App\Http\Controllers\ActiveWindowController;
use App\Http\Controllers\MinutePulseController;
use App\Http\Controllers\ScreeenshotController;
use App\Http\Controllers\StatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return response()->json([
        'message' => 'Welcome to InvoDesk Stats',
        'data' => []
    ]);
});

Route::get('/pulses', [MinutePulseController::class, 'index']);
Route::get('/screenshots', [ScreeenshotController::class, 'index']);
Route::get('/track-items', [ActiveWindowController::class, 'index']);

