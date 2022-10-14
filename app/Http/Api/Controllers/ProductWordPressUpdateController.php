<?php

namespace App\Http\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;

class ProductWordPressUpdateController extends Controller
{
    protected function returnInvalidResponse()
    {
        return response()->json([
            'success' => false,
        ]);
    }

    public function __invoke(Product $product)
    {
        if (request('license_key', false) === false) {
            return $this->returnInvalidResponse();
        }

        $response = Http::post('https://api.lemonsqueezy.com/v1/licenses/validate', [
            'license_key' => request('license_key'),
        ]);

        if ($response->json('valid', false) === false) {
            return $this->returnInvalidResponse();
        }

        if ($response->json('meta.product_id') != $product->vendor_product_id) {
            return $this->returnInvalidResponse();
        }

        return response()->json([
            'success' => true,
            'update' => [
                'version' => $product->version,
                'download_link' => URL::temporarySignedRoute('download', now()->addMinutes(30), ['mediaItem' => $product->getDownloadMedia()]),
            ],
        ]);
    }
}
