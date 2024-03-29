<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Mail\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact.index');
    }

    public function submit(): RedirectResponse
    {
        request()->validate(
            [
                'email' => 'required|email',
                'name' => 'required',
                'message' => 'required',
                'last_name' => 'present|max:0', // honeypot
            ]
        );

        Mail::to('jeffrey@vanrossum.dev')->send(new ContactRequest(request()));

        return redirect()->back()
            ->with('status', __('Your message has been sent.'));
    }
}
