<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/sobre', function () {
    return view('sobre.index');
});

Route::get('/servicos', function () {
    return view('servicos.index');
});

Route::get('/contacto', function () {
    return view('contacto.index');
});

Route::get('/termos', function () {
    return view('termos.index');
});

Route::get('/parceiros', function () {
    return view('parceiros.index');
});
