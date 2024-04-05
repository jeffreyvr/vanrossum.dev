<?php

namespace App\Factories;

use App\Vendors\LemonSqueezy;

class ProductVendorFactory
{
    public static function make($vendorName, $args = [])
    {
        switch ($vendorName) {
            case 'lemonsqueezy':
                return new LemonSqueezy($args);
            default:
                throw new \Exception("Unsupported vendor: {$vendorName}");
        }
    }
}
