<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /** @test */
    public function it_can_create_an_article()
    {
        $data = [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph
        ];

        $this->post(route('articles.store'), $data)
            ->dump()
            ->assertStatus(201)
            ->assertJson(compact('data'));
    }
}