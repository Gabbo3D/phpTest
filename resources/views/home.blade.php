@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Home</h1><br> 
    <a href="{{ route('weather.index') }}" class="laravelPanel laravelExpand">                                
        Weather
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
        </svg>
    </a><br>
    <a href="{{ route('users.index') }}" class="laravelPanel laravelExpand">                                
        Users
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
        </svg>
    </a> 
@endsection
