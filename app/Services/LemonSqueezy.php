<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class LemonSqueezy
{
    protected static function base(): PendingRequest
    {
        return Http::withToken(config('services.lemonsqueezy.api_key'))
            ->baseUrl('https://api.lemonsqueezy.com/v1/');
    }

    public static function get(string $url, array $payload = []): Response
    {
        return self::base()->get($url, $payload);
    }

    public static function post(string $url, array $payload = []): Response
    {
        return self::base()->post($url, $payload);
    }
}
