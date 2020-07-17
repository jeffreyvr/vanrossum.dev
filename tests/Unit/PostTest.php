<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_post_can_render_markdown_to_html()
    {
        $post = factory(Post::class)->create([
            'text' => "# A heading"
        ]);

        $this->assertStringContainsString('<h1>A heading</h1>', $post->renderedText());
    }
}
