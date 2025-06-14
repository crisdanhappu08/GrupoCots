<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        // Verifica si hay un idioma en sesión, si no, usa el predeterminado
        $locale = Session::get('lang', config('app.locale'));

        App::setLocale($locale);

        return $next($request);
    }
}

