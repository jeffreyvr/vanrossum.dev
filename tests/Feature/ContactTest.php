<?php

namespace Tests\Feature;

use App\Mail\ContactRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_visitor_can_view_the_contact_page()
    {
        $this->get(localized_route('contact', [], 'en'))
            ->assertStatus(200);
    }

    /** @test */
    public function a_visitor_can_submit_the_contact_form()
    {
        Mail::fake();

        $this->post(route('contact.submit'))
            ->assertSessionHasErrors();

        $this->post(route('contact.submit'), [
            'email' => 'test@test.nl',
            'name' => 'Mark Knopfler',
            'message' => 'A message',
            'last_name' => '', // honeypot
        ])
            ->assertSessionDoesntHaveErrors(200);

        Mail::assertSent(ContactRequest::class);
    }
}
