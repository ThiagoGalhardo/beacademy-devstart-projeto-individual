<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    /** @test */
    public function test_check_if_user_columns_is_correct()
    {
        $user = new User();

        $expected = [
            'name',
            'email',
            'password'
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());
        $this->assertEquals(0, count($arrayCompared));
    }

    public function test_check_if_user_can_see_form_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/form');
        $response->assertStatus(200);
    }

    // ===================================

    public function test_check_if_user_can_see_users_list()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/users');
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_see_edit_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $id = User::all()->random()->id;
        $response = $this->get("/users/{$id}/edit");
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_delete_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $id = User::all()->random()->id;
        $response = $this->actingAs($user)
            ->delete("/users/$id");
        $response->assertStatus(302);
    }
}
