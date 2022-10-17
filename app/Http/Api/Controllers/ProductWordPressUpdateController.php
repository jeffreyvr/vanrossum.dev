<?php

namespace App\Http\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\Services\LemonSqueezy;
use GrahamCampbell\Markdown\Facades\Markdown;
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

        $response = LemonSqueezy::post('/licenses/validate', [
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
                'download_link' => URL::temporarySignedRoute('download', now()->addMinutes(60), ['mediaItem' => $product->getDownloadMedia()]),
                'sections' => [
                    'changelog' => Markdown::convert($product->changelog)->getContent(),
                ],
            ],
        ]);
    }
}
