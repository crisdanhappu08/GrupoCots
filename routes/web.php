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
Route::get('/Politicas-de-seguridad', function () {
    return view('politicas');
});
Route::get('/Contactanos', function () {
    return view('contacto');
});





