<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session()->has('applocale') AND array_key_exists(session()->get('applocale'), config('languages')))
        {
            App::setlocale(session()->get('applocale'));
        } else {
            App::setlocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
