<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_redirects_to_the_locale_homepage()
    {
        $this->get('/')
            ->assertRedirect(localized_route('home'));
    }

    /** @test */
    public function a_visitor_can_view_the_homepage()
    {
        $this->withoutExceptionHandling();

        $this->get(localized_route('home', [], 'en'))
            ->assertStatus(200);

        $this->get(localized_route('home', [], 'nl'))
            ->assertStatus(200);
    }

    /** @test */
    public function a_visitor_can_view_recent_posts_on_the_homepage()
    {
        $posts = factory(Post::class)->times(3)->create();

        $posts->each(function(Post $post){
            $this->get(localized_route('home'))
                ->assertSee($post->title);
        });
    }
}
