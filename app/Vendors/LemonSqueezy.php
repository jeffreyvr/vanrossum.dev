<?php

namespace App\Vendors;

use App\Services\LemonSqueezy as ServicesLemonSqueezy;
use App\Vendors\VendorInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class LemonSqueezy implements VendorInterface
{
    public function __construct(public array $args)
    {
        //
    }

    public function variants(): Collection
    {
        $variants = Cache::remember("lemonsqueezy_product_variants_{$this->args['product_id']}", 300, function () {
            return ServicesLemonSqueezy::get("products/{$this->args['product_id']}/variants", [
                'filter[status]' => 'published',
                'sort' => 'sort'
            ])
                ->json('data');
        });

        return collect($variants)->map(function ($variant) {
            $interval = $variant['attributes']['interval'];

            if ($variant['attributes']['is_license_limit_unlimited'] && $variant['attributes']['is_license_length_unlimited']) {
                $interval = 'one time';
            }

            return [
                'id' => $variant['id'],
                'name' => $variant['attributes']['name'],
                'description' => $variant['attributes']['description'],
                'price' => $variant['attributes']['price'],
                'formatted_price' => '€ '. number_format($variant['attributes']['price'] / 100, 2, '.', ','),
                'interval' => $interval
            ];
        });
    }
}
