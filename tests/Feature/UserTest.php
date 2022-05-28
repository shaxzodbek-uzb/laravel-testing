<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_page()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_users_list_in_api()
    {
        $response = $this->getJson('/api/users');
        $response->assertJson(fn (AssertableJson $json) =>
            $json->hasAll(['success', 'data'])
        );
    }
    public function test_users_list_count_in_api()
    {
        $count = User::count();
        $response = $this->getJson('/api/users');
        $response->assertJson(fn (AssertableJson $json) =>
            $json->has('data')
                ->has('data', $count)
                ->etc()
            
        );
    }

    public function test_count_users()
    {
        User::factory()->count(10)->create();
        $this->assertDatabaseCount('users', 10);
    }
}
