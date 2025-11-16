<?php

namespace Tests\Feature;

use App\Models\Content;
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

        $this->assertDatabaseHas('contents', [
            'title' => 'Meu Conteúdo',
            'content' => 'Texto do conteúdo aqui',
        ]);
    }

    public function test_mod_can_create_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Moderador',
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

        $this->assertDatabaseHas('contents', [
            'title' => 'Meu Conteúdo',
            'content' => 'Texto do conteúdo aqui',
        ]);
    }

    public function test_op_can_create_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Operador',
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

        $this->assertDatabaseHas('contents', [
            'title' => 'Meu Conteúdo',
            'content' => 'Texto do conteúdo aqui',
        ]);
    }

    public function test_user_cannot_create_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Aluno',
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

        $response->assertStatus(403);
    }

    public function test_adm_can_update_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'ADM',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
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

    public function test_mod_can_update_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Moderador',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
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

    public function test_op_can_update_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Moderador',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
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

    public function test_user_cannot_update_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Aluno',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
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

        $updateResponse->assertStatus(403);

        $this->assertDatabaseMissing('contents', [
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

        $content = Content::factory()->create([
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

    public function test_mod_cannot_delete_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Moderador',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
            'title' => 'Meu Conteúdo',
            'content' => 'Texto do conteúdo aqui',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => now(),
        ]);

        Passport::actingAs($user);

        $deleteResponse = $this->deleteJson("/api/conteudos/{$content->id}");

        $deleteResponse->assertStatus(403);

        $this->assertDatabaseHas('contents', [
            'id' => $content->id,
        ]);
    }

    public function test_op_cannot_delete_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Operador',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
            'title' => 'Meu Conteúdo',
            'content' => 'Texto do conteúdo aqui',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => now(),
        ]);

        Passport::actingAs($user);

        $deleteResponse = $this->deleteJson("/api/conteudos/{$content->id}");

        $deleteResponse->assertStatus(403);

        $this->assertDatabaseHas('contents', [
            'id' => $content->id,
        ]);
    }

    public function test_user_cannot_delete_content(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Aluno',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
            'title' => 'Meu Conteúdo',
            'content' => 'Texto do conteúdo aqui',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => now(),
        ]);

        Passport::actingAs($user);

        $deleteResponse = $this->deleteJson("/api/conteudos/{$content->id}");

        $deleteResponse->assertStatus(403);

        $this->assertDatabaseHas('contents', [
            'id' => $content->id,
        ]);
    }

    public function test_can_view_content_index(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'ADM',
        ]);

        Content::factory()->count(5)->create([
            'status' => 'Ativo',
            'published_at' => now(),
        ]);

        $response = $this->getJson('/api/conteudos');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'data' => [
                    '*' => ['id', 'title', 'content', 'status', 'published_at'],
                ],
                'links',
            ],
        ]);

        $response->assertJsonCount(5, 'data.data');
    }

    public function test_can_view_content_show(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'ADM',
        ]);

        $content = Content::factory()->create([
            'title' => 'Conteúdo Show',
            'content' => 'Texto do conteúdo para show',
            'status' => 'Ativo',
            'published_at' => now(),
        ]);

        $response = $this->getJson("/api/conteudos/{$content->id}");

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'id' => $content->id,
            'title' => $content->title,
        ]);
    }

    public function test_adm_can_change_content_status(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'ADM',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
            'title' => 'Conteúdo Status',
            'content' => 'Texto do conteúdo para status',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => null,
        ]);

        Passport::actingAs($user);

        $response = $this->patchJson("/api/conteudos/{$content->id}/status", [
            'status' => 'Inativo',
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('contents', [
            'id' => $content->id,
            'status' => 'Inativo',
        ]);
    }

    public function test_mod_can_change_content_status(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Moderador',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
            'title' => 'Conteúdo Status',
            'content' => 'Texto do conteúdo para status',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => null,
        ]);

        Passport::actingAs($user);

        $response = $this->patchJson("/api/conteudos/{$content->id}/status", [
            'status' => 'Inativo',
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('contents', [
            'id' => $content->id,
            'status' => 'Inativo',
        ]);
    }

    public function test_op_cannot_change_content_status(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'Operador',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
            'title' => 'Conteúdo Status',
            'content' => 'Texto do conteúdo para status',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => null,
        ]);

        Passport::actingAs($user);

        $response = $this->patchJson("/api/conteudos/{$content->id}/status", [
            'status' => 'Inativo',
        ]);

        $response->assertStatus(403);

        $this->assertDatabaseMissing('contents', [
            'id' => $content->id,
            'status' => 'Inativo',
        ]);
    }

    public function test_change_status_validation(): void
    {
        $user = SystemUser::factory()->create([
            'status' => 'Ativo',
            'tipo' => 'ADM',
        ]);

        $contentType = ContentType::factory()->create();

        $content = Content::factory()->create([
            'title' => 'Conteúdo Status',
            'content' => 'Texto do conteúdo para status',
            'content_types_id' => $contentType->id,
            'status' => 'Ativo',
            'published_at' => null,
        ]);

        Passport::actingAs($user);

        $response = $this->patchJson("/api/conteudos/{$content->id}/status", [
            'status' => 'INVALID_STATUS',
        ]);

        $response->assertStatus(422);

        $this->assertDatabaseHas('contents', [
            'id' => $content->id,
            'status' => 'Ativo',
        ]);
    }
}
