<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.index', ['comics' => $comics]); // La vista con i fumetti
});
