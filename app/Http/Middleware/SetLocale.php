<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    function handle($request, Closure $next)
    {
        app()->setLocale($request->segment(1));
        return $next($request);
    }
}
