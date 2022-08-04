<?php

namespace Tests\Feature;

use App\Models\Order;
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
        $user =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
        ]);

        $this->actingAs($user);
        $response = $this->get('/form');
        $response->assertStatus(200);
    }

    // ===================================

    public function test_check_if_user_can_see_users_list()
    {
        $user =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
        ]);

        $this->actingAs($user);
        $response = $this->get('/admin/users');
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_see_edit_user()
    {
        $user =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
        ]);

        $this->actingAs($user);
        $id = User::all()->random()->id;
        $response = $this->get("/admin/users/{$id}/edit");
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_delete_user()
    {
        $user =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
        ]);

        $this->actingAs($user);
        $id = User::all()->random()->id;
        $response = $this->actingAs($user)
            ->delete("/admin/users/$id");
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_see_orders_list()
    {
        $user =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
        ]);

        $this->actingAs($user);
        $response = $this->get('admin/orders');
        $response->assertStatus(302);
    }

    public function test_check_if_user_can_see_edit_orders()
    {
        $user =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
        ]);

        $this->actingAs($user);
        $order_id = Order::all()->random()->id;
        $response = $this->get("/admin/orders/{$order_id}");
        $response->assertStatus(302);
    }
}
