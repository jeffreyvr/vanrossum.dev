<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $segment = $request->segment(1) ?? substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

        if (in_array($segment, locales())) {
            app()->setLocale($segment);
        }

        return $next($request);
    }
}
