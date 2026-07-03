<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale', 'en');

        if (!in_array($locale, ['en', 'sw', 'fr'])) {
            $locale = 'en';
        }

        App::setLocale($locale);

        return $next($request);
    }
}