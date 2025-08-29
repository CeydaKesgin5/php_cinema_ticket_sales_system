<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\ShowtimeController;

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('movies', MovieController::class);
    Route::apiResource('halls', HallController::class);
    Route::apiResource('showtimes', ShowtimeController::class);
});