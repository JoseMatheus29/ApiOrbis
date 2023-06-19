<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ToolsController extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->postJson('/api/Tools/add', ['name' => 'Sally']);
 
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true, 
            ]);
    }
}
