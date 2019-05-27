<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_project()
    {
        // $disableExceptionHandling  = $this->withot
        $disableExceptionHandling = $this->withoutExceptionHandling();
        $faker = $this->faker;
        $attributes = [
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
        ];
        $this->post('/projects', $attributes)->assertRedirect('/projects');

        $this->assertDatabaseHas('projects', $attributes);
        $this->get('/projects')->assertSee($attributes['title']);
    }
}
