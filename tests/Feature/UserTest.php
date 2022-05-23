<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_users_list_status()
    {
        // factory(User::class, 10)->create();
        $response = $this->get('/users');
        $response->assertStatus(200);
    }
}
