<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\LemonSqueezy;
use Symfony\Component\HttpFoundation\Response;

class SignedOrLicenseKeyed
{
    /**
     * Handle an incoming request.
     *
     * Signed key is for backwards compatibility.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(request('license_key') && request('product_id')) {
            $response = LemonSqueezy::post('/licenses/validate', [
                'license_key' => request('license_key'),
            ]);

            if ($response->json('valid', false) === false) {
                abort(401, 'Invalid license key.');
            }

            if ($response->json('meta.product_id') != request('product_id')) {
                abort(401, 'Invalid product');
            }
        } elseif (! request()->hasValidSignature()) {
            abort(401, 'Invalid signature.');
        }

        return $next($request);
    }
}
