<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;

Route::get('/sales', [SalesController::class, 'sales']);

Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('products')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodbeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyhealth']);
    Route::get('/home-care', [ProductController::class, 'homecare']);
    Route::get('/baby-kid', [ProductController::class, 'babykid']);
});