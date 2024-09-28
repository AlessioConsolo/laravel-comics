<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', [ComicController::class, 'index']);
