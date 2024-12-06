<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => '/api/v1'], function () {

    Route::group(["prefix" => "/weather"], function () {
        Route::get('/{location}', [WeatherController::class, 'index']);
    });
});
