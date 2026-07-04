<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Get language from session (fallback: English)
        $locale = Session::get('locale', 'en');

        // Apply application language
        App::setLocale($locale);

        return $next($request);
    }
}