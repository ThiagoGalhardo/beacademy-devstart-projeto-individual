<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    public function test_check_if_user_is_admin()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->assertTrue($admin->is_admin == 1);
    }

    public function test_check_if_admin_can_see_users_list()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->actingAs($admin);
        $response = $this->get("/admin/users");
        $response->assertStatus(200);
    }

    public function test_check_if_admin_can_edit_users()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->actingAs($admin);
        $id = User::all()->random()->id;
        $response = $this->get("/admin/users/{$id}/edit");
        $response->assertStatus(200);
    }

    public function test_check_if_admin_can_delete_users()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->actingAs($admin);
        $id = User::all()->random()->id;

        $response = $this->actingAs($admin)
            ->delete("/admin/users/$id");

        $response->assertRedirect('/admin/users');
    }

    public function test_check_if_admin_can_see_orders_list()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->actingAs($admin);
        $response = $this->get("/admin/orders");
        $response->assertStatus(200);
    }

    public function test_check_if_admin_can_edit_orders()
    {
        $admin =  User::create([
            'name' => 'Test Example',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => '12345678',
            'is_admin' => 1
        ]);

        $this->actingAs($admin);
        $order_id = Order::all()->random()->id;
        $response = $this->get("/admin/orders/{$order_id}");
        $response->assertStatus(200);
    }
}
