<?php

namespace Tests\Feature;

use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_visitor_can_view_a_project_overview()
    {
        $projects = factory(Project::class)->times(3)->create();

        $this->get(localized_route('projects', [], 'en'))
            ->assertStatus(200)
            ->assertSee($projects->first()->title);
    }
}
