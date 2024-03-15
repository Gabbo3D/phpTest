<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $apiKey = '707a709f42bafc3ef5181cdc2c2254c5';
        $city = 'Caballito, AR';
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");
        $weatherData = $response->json();
        $weatherData['main']['temp']=$weatherData['main']['temp']-273.15;
        return view('weather', compact('weatherData'));
    }
}
