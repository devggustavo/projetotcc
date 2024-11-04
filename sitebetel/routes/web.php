<?php

use Illuminate\Support\Facades\Route;

Route::prefix('ibbb')->group(function () {
    Route::get('/', function () {
        return view('inicial');
    });

    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/sobre', function () {
        return view('sobre');
    });

    Route::get('/cultos', function () {
        return view('cultos');
    });

    Route::get('/eventos', function () {
        return view('eventos');
    });

    Route::get('/midias', function () {
        return view('midias');
    });

    Route::get('/contribuicoes', function () {
        return view('contribuicoes');
    });

    Route::get('/materiais', function () {
        return view('materiais');
    });

    Route::get('/contato', function () {
        return view('contato');
    });
});

