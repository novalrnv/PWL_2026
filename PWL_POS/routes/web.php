<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;

Route::get('/level', [LevelController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
