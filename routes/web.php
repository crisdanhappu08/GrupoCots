<?php

use Illuminate\Support\Facades\Route;


Route::get('{lang}/Home', function ($lang) {
    App::setLocale($lang);
    return view('Home');
});

Route::get('{lang}/Nosotros', function ($lang) {
    App::setLocale($lang);
    return view('Nosotros');
});
Route::get('{lang}/Estructura-organizacional', function ($lang) {
    App::setLocale($lang);
    return view('estructura-organizacional');
});

Route::get('{lang}/Servicios', function ($lang) {
    App::setLocale($lang);
    return view('servicios');
});

Route::get('{lang}/Politicas-de-seguridad', function ($lang) {
    App::setLocale($lang);
    return view('Politicas');
});

Route::get('{lang}/Contactanos', function ($lang) {
    App::setLocale($lang);
    return view('Contacto');
});


