<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function fetch(Request $request)
    {
        $city = $request->input('city');
        $apiKey = 'eccd1ba79211a6201b677e9543d77094'; // Replace with your actual API key
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");
        return $response->json();
    }
}
