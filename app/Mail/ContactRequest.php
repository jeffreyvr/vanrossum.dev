<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function build()
    {
        return $this->from('noreply@vanrossum.dev')
            ->markdown('mail.contact')
            ->replyTo($this->request->email)
            ->with([
                'name' => $this->request->get('name'),
                'email' => $this->request->get('email'),
                'message' => $this->request->get('message'),
            ]);
    }
}
