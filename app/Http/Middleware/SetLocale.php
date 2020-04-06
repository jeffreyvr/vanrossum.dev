<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    function handle($request, Closure $next)
    {
        if ( in_array( $request->segment(1), ['nl', 'en'] ) ) {
            app()->setLocale($request->segment(1));
        }
        return $next($request);
    }
}
