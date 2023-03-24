<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/certificados', function () {
    return view('certificados');
});

Route::get('/contato', function () {
    return view('contato');
});