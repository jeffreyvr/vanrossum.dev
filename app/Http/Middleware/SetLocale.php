<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $availableLangs = ['nl', 'en'];

        if (request('lang')) {
            app()->setLocale(in_array(request('lang'), $availableLangs) ? request('lang') : 'en');
        } else {
            $userLangs = preg_split('/,|;/', $request->server('HTTP_ACCEPT_LANGUAGE'));
            // dd($userLangs);
            foreach ($availableLangs as $lang) {
                if (in_array($lang, $userLangs)) {
                    app()->setLocale($lang);
                    break;
                }
            }
        }

        return $next($request);
    }
}
