<?php

namespace App\Http\Controllers;

use App\Http\Resources\WeatherResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index($location)
    {
        $key = env('WEATHER_API_KEY');

        $current_day = date('d');
        $lifetime = strtotime('tomorrow midnight') - time();

        return Cache::remember("weather:$location:$current_day", $lifetime, function () use ($location, $key) {

            $response = Http::get(weatherUrl($location, $key));

            if (!$response->successful()) return null;

            return new WeatherResource($response->json());
        });
    }
}
