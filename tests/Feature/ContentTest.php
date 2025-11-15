<?php

namespace Tests\Feature;

use App\Models\ContentType;
use App\Models\SystemUser;
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
        $this->artisan('passport:keys');
    }

    public function test_adm_can_create_content(): void
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

        $response->assertStatus(201);
    }

    public function test_adm_can_update_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'ADM',
        ]);

        $contentType = ContentType::factory()->create();

        $content = \App\Models\Content::factory()->create([
            'title' => 'Meu Conteúdo',
            'content' => 'Texto do conteúdo aqui',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => now(),
        ]);

        Passport::actingAs($user);

        $updateResponse = $this->putJson("/api/conteudos/{$content->id}", [
            'title' => 'Conteúdo Atualizado',
            'content' => 'Texto atualizado do conteúdo',
            'content_type' => $contentType->title,
            'content_type_description' => 'Descrição atualizada do tipo',
            'content_tags' => [
                [
                    'tag_name' => 'Tag Atualizada',
                    'description' => 'Descrição atualizada da tag',
                ],
            ],
            'published_at' => now(),
        ]);

        $updateResponse->assertStatus(200);

        $this->assertDatabaseHas('contents', [
            'id' => $content->id,
            'title' => 'Conteúdo Atualizado',
            'content' => 'Texto atualizado do conteúdo',
        ]);
    }

    public function test_adm_can_delete_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'ADM',
        ]);

        $contentType = ContentType::factory()->create();

        $content = \App\Models\Content::factory()->create([
            'title' => 'Meu Conteúdo',
            'content' => 'Texto do conteúdo aqui',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => now(),
        ]);

        Passport::actingAs($user);

        $deleteResponse = $this->deleteJson("/api/conteudos/{$content->id}");

        $deleteResponse->assertStatus(200);

        $this->assertDatabaseMissing('contents', [
            'id' => $content->id,
        ]);
    }
}
