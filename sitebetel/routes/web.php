<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
});

Route::get('/login', function () {
    return view('login');
});
