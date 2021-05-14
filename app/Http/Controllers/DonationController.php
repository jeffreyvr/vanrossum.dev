<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Mail\DonationRequest;
use Illuminate\Support\Facades\Mail;

class DonationController extends Controller
{
    public function show()
    {
        return view('pages.donate');
    }

    public function thanks()
    {
        return view('pages.donate-thanks');
    }

    public function store()
    {
        request()->validate([
            'amount' => 'required|numeric|min:1',
            'last_name' => 'present|max:0' // honeypot
        ]);

        $client = new Client;

        $amount = number_format((float)request('amount'), 2, '.', ',');

        $response = $client->post('https://api.mollie.com/v2/payments', [
            'form_params' => [
                'amount' => [
                    'value' => $amount,
                    'currency' => 'EUR'
                ],
                'description' => 'Donation vanrossum.dev',
                'redirectUrl' => route('donate.thanks')
            ],
            'headers' => [
                'Authorization' => 'bearer ' . config('services.mollie.api_key')
            ]
        ]);

        $response = json_decode($response->getBody());

        Mail::to('jeffrey@vanrossum.dev')->send(new DonationRequest(request()));

        return \redirect($response->_links->checkout->href);
    }
}
