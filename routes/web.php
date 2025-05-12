<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/Nosotros', function () {
    return view('Nosotros');
});

Route::get('/estructura-organizacional', function () {
    return view('estructura-organizacional');
});

Route::get('/Servicios', function () {
    return view('Servicios');
});




