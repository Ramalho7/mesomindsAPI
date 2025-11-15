<?php

namespace Tests\Feature;

use App\Models\SystemUser;
use App\Models\ContentType;
use App\Models\ContentTag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use Tests\TestCase;

class ContentTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }

    public function test_can_create_content(): void
    {
    $user = SystemUser::factory()->create([
        'status' => 'Ativo',
        'tipo' => 'ADM',
    ]);

    $contentType = ContentType::factory()->create();

    Passport::actingAs($user);

    $response = $this->postJson('/api/conteudos', [
        'title' => 'Meu Conteúdo',
        'content' => 'Texto do conteúdo aqui',
        'content_type' => $contentType->title,
        'content_type_description' => 'Descrição do tipo',
        'content_tags' => [
            [
                'tag_name' => 'Tag 1',
                'description' => 'Descrição da tag',
            ],
            [
                'tag_name' => 'Tag 2',
                'description' => 'Descrição da tag 2',
            ],
        ],
        'status' => 'Ativo',
        'published_at' => now(),
    ]);

    $response->dump();
    $response->assertStatus(201);
    }
}
