<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutTest extends TestCase
{
    /** @test */
    public function a_visitor_can_view_the_about_page(): void
    {
        $this->get(localized_route('about', [], 'nl'))
            ->assertStatus(200);

        $this->get(localized_route('about', [], 'enq'))
            ->assertStatus(200);
    }
}
