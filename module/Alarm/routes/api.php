<?php

use Illuminate\Support\Facades\Route;
use Module\Alarm\Http\Controllers\AlarmController;

Route::prefix('api/alarm')->group(function () {
    Route::post('/store', [AlarmController::class, 'store']);
    // Add more routes as needed
});
