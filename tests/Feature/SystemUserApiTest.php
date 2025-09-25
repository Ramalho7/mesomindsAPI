<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\SystemUser;


class SystemUserApiTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_create_system_user_api()
    {
        $payload = [
            'nome' => 'Novo Usuário',
            'email' => 'novo@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'cpf' => '12345678901',
            'tipo' => 'ADM',
            'status' => 'Ativo',
        ];

        $response = $this->postJson('/api/users', $payload);

        $response->assertStatus(201)
                 ->assertJsonFragment([
                     'nome' => 'Novo Usuário',
                     'email' => 'novo@example.com',
                     'cpf' => '12345678901',
                     'tipo' => 'ADM',
                     'status' => 'Ativo',
                 ]);

        $this->assertDatabaseHas('system_users', [
            'email' => 'novo@example.com',
        ]);
    }
}
