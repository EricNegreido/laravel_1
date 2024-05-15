<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index/{id}', [EjemploController::class, 'index']);