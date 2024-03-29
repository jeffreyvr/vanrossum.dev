<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $segment = $request->segment(1) ?? substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

        if (in_array($segment, locales())) {
            app()->setLocale($segment);
        }

        return $next($request);
    }
}
