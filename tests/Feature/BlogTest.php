<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_visitor_can_view_a_blog(): void
    {
        $post = factory(Post::class)->create();

        $this->get(route('posts.show', $post))
            ->assertStatus(200)
            ->assertSee($post->title);
    }

    /** @test */
    public function a_visitor_can_view_a_blog_overview(): void
    {
        $posts = factory(Post::class)->times(3)->create();

        $this->get(route('posts'))
            ->assertStatus(200)
            ->assertSee($posts->first()->title);
    }
}
