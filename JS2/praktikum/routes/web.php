<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya ' .$name;
});

Route::get('/articles/{id}', function ($id) { 
    return 'Halaman Artikel dengan ID '.$id; 
});

Route::get('/posts/{postid}/comments/{commentid}', 
    [ArticleController::class, 'articles']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/letter', [HomeController::class, 'index']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/hello', [WelcomeController::class, 'hello']);
