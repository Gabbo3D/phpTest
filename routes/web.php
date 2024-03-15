<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\UsersController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/weather', [WeatherController::class, 'index'])->name('weather.index');
Route::resource('users', UsersController::class);
