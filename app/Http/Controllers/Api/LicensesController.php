<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Clients\LemonSqueeze;
use App\Http\Controllers\Controller;

class LicensesController extends Controller
{
    public function activate()
    {
        request()->validate([
            'license_key' => 'required',
            'source' => 'required'
        ]);

        $response = (new LemonSqueeze)
            ->activateLicense(request('source'), request('license_key'));

        return $response;
    }

    public function deactivate()
    {
        request()->validate([
            'license_key' => 'required',
            'source_id' => 'required'
        ]);

        $response = (new LemonSqueeze)
            ->deactivateLicense(request('source_id'), request('license_key'));

        return $response;
    }

    public function check()
    {
        request()->validate([
            'license_key' => 'required',
            'source_id' => 'required'
        ]);

        $response = (new LemonSqueeze)
            ->validateLicenseKey(request('source_id'), request('license_key'));

        return $response;
    }
}
