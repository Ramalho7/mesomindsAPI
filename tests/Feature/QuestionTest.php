<?php

namespace Tests\Feature;

use App\Models\Materias;
use App\Models\Question;
use App\Models\SystemUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
        $this->artisan('passport:keys');
    }

    public function test_admin_can_create_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'ADM', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Sample Question',
            'content' => 'This is a sample question content.',
            'materia' => $materia->id,
            'criador' => $user->id,
            'status' => 'Active',
            'type' => 'Multipla',
            'correction' => 'Correct',
            'alternatives' => [
                ['content' => 'Alternative 1', 'correct' => true],
                ['content' => 'Alternative 2', 'correct' => false],
            ],
        ];

        $response = $this->postJson('/api/questoes', $data);

        $response->assertStatus(201);

        $this->assertDatabaseHas('questions', [
            'title' => 'Sample Question',
            'content' => 'This is a sample question content.',
        ]);
    }

    public function test_mod_can_create_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Moderador', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Sample Question',
            'content' => 'This is a sample question content.',
            'materia' => $materia->id,
            'criador' => $user->id,
            'status' => 'Active',
            'type' => 'Multipla',
            'correction' => 'Correct',
            'alternatives' => [
                ['content' => 'Alternative 1', 'correct' => true],
                ['content' => 'Alternative 2', 'correct' => false],
            ],
        ];

        $response = $this->postJson('/api/questoes', $data);

        $response->assertStatus(201);

        $this->assertDatabaseHas('questions', [
            'title' => 'Sample Question',
            'content' => 'This is a sample question content.',
        ]);
    }

    public function test_op_can_create_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Operador', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Sample Question',
            'content' => 'This is a sample question content.',
            'materia' => $materia->id,
            'criador' => $user->id,
            'status' => 'Active',
            'type' => 'Multipla',
            'correction' => 'Correct',
            'alternatives' => [
                ['content' => 'Alternative 1', 'correct' => true],
                ['content' => 'Alternative 2', 'correct' => false],
            ],
        ];

        $response = $this->postJson('/api/questoes', $data);

        $response->assertStatus(201);

        $this->assertDatabaseHas('questions', [
            'title' => 'Sample Question',
            'content' => 'This is a sample question content.',
        ]);
    }

    public function test_user_cannot_create_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Aluno', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Sample Question',
            'content' => 'This is a sample question content.',
            'materia' => $materia->id,
            'criador' => $user->id,
            'status' => 'Active',
            'type' => 'Multipla',
            'correction' => 'Correct',
            'alternatives' => [
                ['content' => 'Alternative 1', 'correct' => true],
                ['content' => 'Alternative 2', 'correct' => false],
            ],
        ];

        $response = $this->postJson('/api/questoes', $data);

        $response->assertStatus(403);

        $this->assertDatabaseMissing('questions', [
            'title' => 'Sample Question',
            'content' => 'This is a sample question content.',
        ]);
    }

    public function test_admin_can_update_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'ADM', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $question = Question::factory()->create();

        $data = ['title' => 'Updated Question Title'];

        $response = $this->putJson("/api/questoes/{$question->id}", $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('questions', [
            'title' => 'Updated Question Title',
        ]);
    }

    public function test_mod_can_update_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Moderador', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $question = Question::factory()->create();

        $data = ['title' => 'Updated Question Title'];

        $response = $this->putJson("/api/questoes/{$question->id}", $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('questions', [
            'title' => 'Updated Question Title',
        ]);
    }

    public function test_op_can_update_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Operador', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $question = Question::factory()->create();

        $data = ['title' => 'Updated Question Title'];

        $response = $this->putJson("/api/questoes/{$question->id}", $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('questions', [
            'title' => 'Updated Question Title',
        ]);
    }

    public function test_user_cannot_update_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Aluno', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $question = Question::factory()->create();

        $data = ['title' => 'Updated Question Title'];

        $response = $this->putJson("/api/questoes/{$question->id}", $data);

        $response->assertStatus(403);

        $this->assertDatabaseMissing('questions', [
            'title' => 'Updated Question Title',
        ]);
    }

    public function test_admin_can_delete_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'ADM', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $question = Question::factory()->create();

        $response = $this->deleteJson("/api/questoes/{$question->id}");

        $response->assertStatus(200);

        $this->assertDatabaseMissing('questions', [
            'id' => $question->id,
        ]);
    }

    public function test_mod_cannot_delete_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Moderador', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $question = Question::factory()->create();

        $response = $this->deleteJson("/api/questoes/{$question->id}");

        $response->assertStatus(403);

        $this->assertDatabaseHas('questions', [
            'id' => $question->id,
        ]);
    }

    public function test_op_cannot_delete_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Operador', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $question = Question::factory()->create();

        $response = $this->deleteJson("/api/questoes/{$question->id}");

        $response->assertStatus(403);

        $this->assertDatabaseHas('questions', [
            'id' => $question->id,
        ]);
    }

    public function test_user_cannot_delete_question()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Aluno', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $question = Question::factory()->create();

        $response = $this->deleteJson("/api/questoes/{$question->id}");

        $response->assertStatus(403);

        $this->assertDatabaseHas('questions', [
            'id' => $question->id,
        ]);
    }

    public function test_admin_can_change_question_status()
    {
        $admin = SystemUser::factory()->create(['tipo' => 'ADM', 'status' => 'Ativo']);
        Passport::actingAs($admin);

        $question = Question::factory()->create(['status' => 'Inactive']);

        $data = ['status' => 'Active'];

        $response = $this->patchJson("/api/questoes/{$question->id}/status", $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('questions', [
            'id' => $question->id,
            'status' => 'Active',
        ]);
    }

    public function test_mod_can_change_question_status()
    {
        $admin = SystemUser::factory()->create(['tipo' => 'Moderador', 'status' => 'Ativo']);
        Passport::actingAs($admin);

        $question = Question::factory()->create(['status' => 'Inactive']);

        $data = ['status' => 'Active'];

        $response = $this->patchJson("/api/questoes/{$question->id}/status", $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('questions', [
            'id' => $question->id,
            'status' => 'Active',
        ]);
    }

    public function test_op_can_change_question_status()
    {
        $admin = SystemUser::factory()->create(['tipo' => 'Operador', 'status' => 'Ativo']);
        Passport::actingAs($admin);

        $question = Question::factory()->create(['status' => 'Inactive']);

        $data = ['status' => 'Active'];

        $response = $this->patchJson("/api/questoes/{$question->id}/status", $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('questions', [
            'id' => $question->id,
            'status' => 'Active',
        ]);
    }

    public function test_user_cannot_change_question_status()
    {
        $admin = SystemUser::factory()->create(['tipo' => 'Aluno', 'status' => 'Ativo']);
        Passport::actingAs($admin);

        $question = Question::factory()->create(['status' => 'Inactive']);

        $data = ['status' => 'Active'];

        $response = $this->patchJson("/api/questoes/{$question->id}/status", $data);

        $response->assertStatus(403);

        $this->assertDatabaseHas('questions', [
            'id' => $question->id,
            'status' => 'Inactive',
        ]);
    }

    public function test_scope_search_by_title()
    {
        $user = SystemUser::factory()->create(['status' => 'Ativo']);
        Passport::actingAs($user);

        Question::factory()->create(['title' => 'Laravel Testing']);
        Question::factory()->create(['title' => 'PHP Testing']);

        $response = $this->getJson('/api/questoes?search=Laravel');

        $response->assertStatus(200);
        $this->assertStringContainsString('Laravel Testing', $response->content());
    }

    public function test_scope_search_by_content()
    {
        $user = SystemUser::factory()->create(['status' => 'Ativo']);
        Passport::actingAs($user);

        Question::factory()->create(['content' => 'About Laravel framework']);
        Question::factory()->create(['content' => 'About PHP basics']);

        $response = $this->getJson('/api/questoes?search=Laravel');

        $response->assertStatus(200);
        $this->assertStringContainsString('Laravel', $response->content());
    }

    public function test_scope_status_active()
    {
        $user = SystemUser::factory()->create(['status' => 'Ativo']);
        Passport::actingAs($user);

        Question::factory()->create(['status' => 'Active']);
        Question::factory()->create(['status' => 'Inactive']);

        $response = $this->getJson('/api/questoes?status=Active');

        $response->assertStatus(200);
        $this->assertStringContainsString('Active', $response->content());
    }

    public function test_scope_status_inactive()
    {
        $user = SystemUser::factory()->create(['status' => 'Ativo']);
        Passport::actingAs($user);

        Question::factory()->create(['status' => 'Active']);
        Question::factory()->create(['status' => 'Inactive']);

        $response = $this->getJson('/api/questoes?status=Inactive');

        $response->assertStatus(200);
        $this->assertStringContainsString('Inactive', $response->content());
    }

    public function test_scope_type_multipla()
    {
        $user = SystemUser::factory()->create(['status' => 'Ativo']);
        Passport::actingAs($user);

        Question::factory()->create(['type' => 'Multipla']);
        Question::factory()->create(['type' => 'Aberta']);

        $response = $this->getJson('/api/questoes?type=Multipla');

        $response->assertStatus(200);
        $this->assertStringContainsString('Multipla', $response->content());
    }

    public function test_scope_type_aberta()
    {
        $user = SystemUser::factory()->create(['status' => 'Ativo']);
        Passport::actingAs($user);

        Question::factory()->create(['type' => 'Multipla']);
        Question::factory()->create(['type' => 'Aberta']);

        $response = $this->getJson('/api/questoes?type=Aberta');

        $response->assertStatus(200);
        $this->assertStringContainsString('Aberta', $response->content());
    }

    public function test_last_editor_is_updated_on_question_update(): void
    {
        $editor = SystemUser::factory()->create();
        $question = Question::factory()->create();

        $question->update(['ultimo_editor' => $editor->id]);

        $this->assertEquals($editor->id, $question->ultimo_editor);
    }
}
