<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use LaravelLang\Publisher\Facades\Helpers\Locales;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $defaultLocale = 'pl';

        $locale = $request->route()->parameters()['locale'] ?? $defaultLocale;
        if (!in_array($locale, Locales::installed())) {
            $locale = $defaultLocale;
        }
        app()->setLocale($locale);


        return $next($request);
    }
}
