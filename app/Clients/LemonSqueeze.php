<?php

namespace App\Clients;

use GuzzleHttp\Client;

class LemonSqueeze
{
    public $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.lemonsqueezy.com',
            'timeout'  => 15.0,
            'http_errors' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded'
            ]
        ]);
    }

    public function activateLicense($instance, $license)
    {
        $response = $this->client->request('POST', "/v1/licenses/activate", [
            'form_params' => [
                'license_key' => $license,
                'instance_name' => $instance
            ]
        ]);

        return json_decode($response->getBody());
    }

    public function deactivateLicense($instance, $license)
    {
        $response = $this->client->request('POST', "/v1/licenses/deactivate", [
            'form_params' => [
                'license_key' => $license,
                'instance_id' => $instance
            ]
        ]);

        return json_decode($response->getBody());
    }

    public function validateLicenseKey($instance, $license)
    {
        $request = $this->client->request('POST', "/v1/licenses/validate", [
            'form_params' => [
                'license_key' => $license,
                'instance_id' => $instance
            ]
        ]);

        $response = json_decode($request->getBody());

        return $response->valid ?? false;
    }
}
