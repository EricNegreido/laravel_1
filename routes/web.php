<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index/{id}', [EjemploController::class, 'index']);

Route::get('/home', [homeController::class,'home']);