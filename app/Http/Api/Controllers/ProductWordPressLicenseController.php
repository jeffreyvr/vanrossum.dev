<?php

namespace App\Http\Api\Controllers;

use App\Product;
use App\Services\LemonSqueezy;

class ProductWordPressLicenseController
{
    public array $license = [];

    public function __construct()
    {
        $license = [];

        if (request('license_key')) {
            $license['license_key'] = request('license_key');
        }

        if (request('instance_id')) {
            $license['instance_id'] = request('instance_id');
        }

        if (request('host')) {
            $license['host'] = request('host');
        }

        $this->license = $license;
    }

    public function check(Product $product)
    {
        if (empty($this->license)) {
            return $this->returnInvalidResponse();
        }

        if (empty($this->license['instance_id'])) {
            // there is no instance, so try to activate
            return $this->activate($product);
        }

        $response = LemonSqueezy::post('/licenses/validate', [
            'license_key' => $this->license['license_key'],
            'instance_id' => $this->license['instance_id'],
        ]);

        if ($response->json('valid', false) === false) {
            return $this->returnInvalidResponse();
        }

        if ($response->json('meta.product_id') != $product->vendor_product_id) {
            return $this->returnInvalidResponse();
        }

        return response()->json([
            'success' => true,
            'instance_id' => $response->json('instance.id'),
        ]);
    }

    public function activate(Product $product)
    {
        if (empty($this->license)) {
            return $this->returnInvalidResponse();
        }

        $response = LemonSqueezy::post('/licenses/activate/', [
            'license_key' => $this->license['license_key'],
            'instance_name' => $this->license['host'],
        ]);

        if (! $response->json('activated', false)) {
            return $this->returnInvalidResponse();
        }

        if ($response->json('meta.product_id') != $product->vendor_product_id) {
            return $this->returnInvalidResponse();
        }

        return response()->json([
            'success' => true,
            'instance_id' => $response->json('instance.id'),
        ]);
    }

    public function deactivate(Product $product)
    {
        if (empty($this->license)) {
            return $this->returnInvalidResponse();
        }

        $response = LemonSqueezy::post('/licenses/deactivate', [
            'license_key' => $this->license['license_key'],
            'instance_id' => $this->license['instance_id'],
        ]);

        if ($response->json('deactivated') === false) {
            return $this->returnInvalidResponse();
        }

        return response()->json([
            'success' => true,
        ]);
    }

    protected function returnInvalidResponse()
    {
        return response()->json([
            'success' => false,
        ]);
    }
}
