<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya ' .$name;
});

Route::get('/articles/{id}', function ($id) { 
    return 'Halaman Artikel dengan ID '.$id; 
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

Route::get('/about', function () {
    return 'Nama : Khoirul Umam Novalidi <br>NIM : 244107020210';
});

Route::get('/letter', function () {
    return 'Selamat Datang';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/hello', function () {
    return 'Hello World';
});
