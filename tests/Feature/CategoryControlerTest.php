<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryControlerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/api/fr/categories');

        $response->assertStatus(200);
    }

    public function test_create_category(): void
    {
        $response = $this->post('/api/categories', [
            'name_fr' => 'test2',
            'name_en' => 'test2',
            'name_pl' => 'test2',
            'name_de' => 'test2',
        ]);
        $response->assertStatus(201);
    }

    public function test_show_category(): void
    {
        $response = $this->get('/api/de/categories/1');

        $response->assertStatus(200);
    }

    public function test_update_category(): void
    {
        $response = $this->put('/api/categories/1', [
            'name_fr' => 'test',
            'name_en' => 'test',
            'name_pl' => 'test',
            'name_de' => 'test',
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_category(): void
    {
        $response = $this->delete('/api/categories/1');

        $response->assertStatus(200);
    }


}
