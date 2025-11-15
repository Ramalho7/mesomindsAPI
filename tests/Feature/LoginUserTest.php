<?php

namespace Tests\Feature;

use App\Models\SystemUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginUserTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }

    // public function test_user_can_login_with_valid_credentials(): void
    // {
    //     SystemUser::factory()->create([
    //         'email' => 'test@example.com',
    //         'password' => bcrypt('password123'),
    //         'status' => 'Ativo',
    //     ]);

    //     $response = $this->postJson('/api/login', [
    //         'email' => 'test@example.com',
    //         'password' => 'password123',
    //     ]);

    //     $response->dump();

    //     $response->assertStatus(200);
    //     $response->assertJsonStructure(['token']);
    // }

    public function test_user_cannot_login_with_invalid_credentials(): void
    {
        SystemUser::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123'),
            'status' => 'Ativo',
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertStatus(401);
        $response->assertJson(['message' => 'Credenciais inválidas']);
    }
}
