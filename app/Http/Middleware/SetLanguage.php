<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * Sets the application locale based on the 'Accept-Language' header.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Extract the 'Accept-Language' header or default to 'en'
        $lang = $request->header('Accept-Language', 'en');

        // Optional: Validate or sanitize the $lang value
        $supportedLanguages = ['en', 'es', 'fr', 'de','ar']; // Add your supported languages here
        if (!in_array($lang, $supportedLanguages)) {
            $lang = 'en'; // Fallback language
        }

        // Set the application's locale
        app()->setLocale($lang);

        return $next($request);
    }
}
