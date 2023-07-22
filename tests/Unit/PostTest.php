<?php

namespace Tests\Unit;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_post_can_render_markdown_to_html()
    {
        $post = factory(Post::class)->create([
            'text' => '# A heading',
        ]);

        $this->assertStringContainsString('<h1 id="a-heading">A heading</h1>', $post->renderedText());
    }
}
