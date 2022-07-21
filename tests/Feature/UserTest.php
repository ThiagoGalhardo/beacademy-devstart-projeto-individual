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
}
