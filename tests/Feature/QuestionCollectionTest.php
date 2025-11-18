<?php

namespace Tests\Feature;

use App\Models\Materias;
use App\Models\QuestionCollection;
use App\Models\SystemUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use Tests\TestCase;

class QuestionCollectionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
        $this->artisan('passport:keys');
    }

    public function test_admin_can_create_question_collection_with_questions_and_alternatives()
    {
        $user = SystemUser::factory()->create(['tipo' => 'ADM', 'status' => 'Ativo']);

        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Sample Collection',
            'description' => 'Collection description',
            'subject_id' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(7)->toDateString(),
            'questions' => [
                [
                    'title' => 'Sample Question',
                    'content' => 'Question content',
                    'correction' => 'Sample correction',
                    'status' => 'Active',
                    'type' => 'Multipla',
                    'materia' => $materia->id,
                    'alternatives' => [
                        ['content' => 'Alt 1', 'correct' => true],
                        ['content' => 'Alt 2', 'correct' => false],
                    ],
                ],
            ],
        ];

        $response = $this->postJson('/api/questoescolecao', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('question_collections', [
            'title' => 'Sample Collection',
        ]);
        $this->assertDatabaseHas('questions', [
            'title' => 'Sample Question',
        ]);
        $this->assertDatabaseHas('alternatives', [
            'content' => 'Alt 1',
        ]);
    }

    public function test_mod_can_create_question_collection_with_questions_and_alternatives()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Moderador', 'status' => 'Ativo']);

        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Sample Collection',
            'description' => 'Collection description',
            'subject_id' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(7)->toDateString(),
            'questions' => [
                [
                    'title' => 'Sample Question',
                    'content' => 'Question content',
                    'correction' => 'Sample correction',
                    'status' => 'Active',
                    'type' => 'Multipla',
                    'materia' => $materia->id,
                    'alternatives' => [
                        ['content' => 'Alt 1', 'correct' => true],
                        ['content' => 'Alt 2', 'correct' => false],
                    ],
                ],
            ],
        ];

        $response = $this->postJson('/api/questoescolecao', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('question_collections', [
            'title' => 'Sample Collection',
        ]);
        $this->assertDatabaseHas('questions', [
            'title' => 'Sample Question',
        ]);
        $this->assertDatabaseHas('alternatives', [
            'content' => 'Alt 1',
        ]);
    }

    public function test_op_can_create_question_collection_with_questions_and_alternatives()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Operador', 'status' => 'Ativo']);

        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Sample Collection',
            'description' => 'Collection description',
            'subject_id' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(7)->toDateString(),
            'questions' => [
                [
                    'title' => 'Sample Question',
                    'content' => 'Question content',
                    'correction' => 'Sample correction',
                    'status' => 'Active',
                    'type' => 'Multipla',
                    'materia' => $materia->id,
                    'alternatives' => [
                        ['content' => 'Alt 1', 'correct' => true],
                        ['content' => 'Alt 2', 'correct' => false],
                    ],
                ],
            ],
        ];

        $response = $this->postJson('/api/questoescolecao', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('question_collections', [
            'title' => 'Sample Collection',
        ]);
        $this->assertDatabaseHas('questions', [
            'title' => 'Sample Question',
        ]);
        $this->assertDatabaseHas('alternatives', [
            'content' => 'Alt 1',
        ]);
    }

    public function test_user_cannot_create_question_collection_with_questions_and_alternatives()
    {
        $user = SystemUser::factory()->create(['tipo' => 'Aluno', 'status' => 'Ativo']);

        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Sample Collection',
            'description' => 'Collection description',
            'subject_id' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(7)->toDateString(),
            'questions' => [
                [
                    'title' => 'Sample Question',
                    'content' => 'Question content',
                    'correction' => 'Sample correction',
                    'status' => 'Active',
                    'type' => 'Multipla',
                    'materia' => $materia->id,
                    'alternatives' => [
                        ['content' => 'Alt 1', 'correct' => true],
                        ['content' => 'Alt 2', 'correct' => false],
                    ],
                ],
            ],
        ];

        $response = $this->postJson('/api/questoescolecao', $data);

        $response->assertStatus(403);
        $this->assertDatabaseMissing('question_collections', [
            'title' => 'Sample Collection',
        ]);
        $this->assertDatabaseMissing('questions', [
            'title' => 'Sample Question',
        ]);
        $this->assertDatabaseMissing('alternatives', [
            'content' => 'Alt 1',
        ]);
    }

    public function test_admin_can_update_question_collection()
    {

        $this->markTestSkipped('Testando a factory, pulando temporariamente.');

        $user = SystemUser::factory()->create(['tipo' => 'ADM', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $collection = QuestionCollection::factory()
            ->withQuestions(1)
            ->create([
                'title' => 'Original Collection',
                'description' => 'Original description',
                'subject_id' => $materia->id,
            ]);

        $this->assertDatabaseHas('question_collections', [
            'title' => 'Original Collection',
        ]);

        $question = $collection->questions()->first();

        if (!$question) {
        $this->fail('Collection does not have questions');
        }

        $updateData = [
            'title' => 'Updated Collection',
            'description' => 'Updated description',
            'subject_id' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(10)->toDateString(),
            'questions' => [
                [
                    'id' => $question->id,
                    'title' => 'Updated Question',
                    'content' => 'Updated content',
                    'correction' => 'Updated correction',
                    'status' => 'Active',
                    'type' => 'Multipla',
                    'materia' => $materia->id,
                    'alternatives' => [
                        ['content' => 'Alt X', 'correct' => true],
                        ['content' => 'Alt Y', 'correct' => false],
                    ],
                ],
            ],
        ];

        $response = $this->putJson("/api/questoescolecao/{$collection->id}", $updateData);

        $response->assertStatus(200);

        $this->assertDatabaseHas('question_collections', [
            'id' => $collection->id,
            'title' => 'Updated Collection',
        ]);
        $this->assertDatabaseHas('questions', [
            'title' => 'Updated Question',
        ]);
        $this->assertDatabaseHas('alternatives', [
            'content' => 'Alt X',
        ]);
    }

    public function test_mod_can_update_question_collection()
    {

        $this->markTestSkipped('Testando a factory, pulando temporariamente.');

        $user = SystemUser::factory()->create(['tipo' => 'Moderador', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $collection = QuestionCollection::factory()
            ->withQuestions(1)
            ->create([
                'title' => 'Original Collection',
                'description' => 'Original description',
                'subject_id' => $materia->id,
            ]);

        $this->assertDatabaseHas('question_collections', [
            'title' => 'Original Collection',
        ]);

        $question = $collection->questions()->first();

        if (!$question) {
        $this->fail('Collection does not have questions');
        }

        $updateData = [
            'title' => 'Updated Collection',
            'description' => 'Updated description',
            'subject_id' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(10)->toDateString(),
            'questions' => [
                [
                    'id' => $question->id,
                    'title' => 'Updated Question',
                    'content' => 'Updated content',
                    'correction' => 'Updated correction',
                    'status' => 'Active',
                    'type' => 'Multipla',
                    'materia' => $materia->id,
                    'alternatives' => [
                        ['content' => 'Alt X', 'correct' => true],
                        ['content' => 'Alt Y', 'correct' => false],
                    ],
                ],
            ],
        ];

        $response = $this->putJson("/api/questoescolecao/{$collection->id}", $updateData);

        $response->assertStatus(200);

        $this->assertDatabaseHas('question_collections', [
            'id' => $collection->id,
            'title' => 'Updated Collection',
        ]);
        $this->assertDatabaseHas('questions', [
            'title' => 'Updated Question',
        ]);
        $this->assertDatabaseHas('alternatives', [
            'content' => 'Alt X',
        ]);
    }

    public function test_op_can_update_question_collection()
    {

        $this->markTestSkipped('Testando a factory, pulando temporariamente.');

        $user = SystemUser::factory()->create(['tipo' => 'Operador', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $collection = QuestionCollection::factory()
            ->withQuestions(1)
            ->create([
                'title' => 'Original Collection',
                'description' => 'Original description',
                'subject_id' => $materia->id,
            ]);

        $this->assertDatabaseHas('question_collections', [
            'title' => 'Original Collection',
        ]);

        $question = $collection->questions()->first();

        if (!$question) {
        $this->fail('Collection does not have questions');
        }

        $updateData = [
            'title' => 'Updated Collection',
            'description' => 'Updated description',
            'subject_id' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(10)->toDateString(),
            'questions' => [
                [
                    'id' => $question->id,
                    'title' => 'Updated Question',
                    'content' => 'Updated content',
                    'correction' => 'Updated correction',
                    'status' => 'Active',
                    'type' => 'Multipla',
                    'materia' => $materia->id,
                    'alternatives' => [
                        ['content' => 'Alt X', 'correct' => true],
                        ['content' => 'Alt Y', 'correct' => false],
                    ],
                ],
            ],
        ];

        $response = $this->putJson("/api/questoescolecao/{$collection->id}", $updateData);

        $response->assertStatus(200);

        $this->assertDatabaseHas('question_collections', [
            'id' => $collection->id,
            'title' => 'Updated Collection',
        ]);
        $this->assertDatabaseHas('questions', [
            'title' => 'Updated Question',
        ]);
        $this->assertDatabaseHas('alternatives', [
            'content' => 'Alt X',
        ]);
    }

    public function test_user_can_update_question_collection()
    {

        $this->markTestSkipped('Testando a factory, pulando temporariamente.');

        $user = SystemUser::factory()->create(['tipo' => 'Aluno', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $collection = QuestionCollection::factory()
            ->withQuestions(1)
            ->create([
                'title' => 'Original Collection',
                'description' => 'Original description',
                'subject_id' => $materia->id,
            ]);

        $this->assertDatabaseHas('question_collections', [
            'title' => 'Original Collection',
        ]);

        $question = $collection->questions()->first();

        $updateData = [
            'title' => 'Updated Collection',
            'description' => 'Updated description',
            'subject_id' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(10)->toDateString(),
            'questions' => [
                [
                    'id' => $question->id,
                    'title' => 'Updated Question',
                    'content' => 'Updated content',
                    'correction' => 'Updated correction',
                    'status' => 'Active',
                    'type' => 'Multipla',
                    'materia' => $materia->id,
                    'alternatives' => [
                        ['content' => 'Alt X', 'correct' => true],
                        ['content' => 'Alt Y', 'correct' => false],
                    ],
                ],
            ],
        ];

        $response = $this->putJson("/api/questoescolecao/{$collection->id}", $updateData);

        $response->assertStatus(403);

        $this->assertDatabaseMissing('question_collections', [
            'id' => $collection->id,
            'title' => 'Updated Collection',
        ]);
        $this->assertDatabaseMissing('questions', [
            'title' => 'Updated Question',
        ]);
        $this->assertDatabaseMissing('alternatives', [
            'content' => 'Alt X',
        ]);
    }

    public function test_cannot_create_question_collection_with_question_without_alternatives()
    {
        $user = SystemUser::factory()->create(['tipo' => 'ADM', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Collection Without Alternatives',
            'description' => 'Should fail',
            'materia' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(7)->toDateString(),
            'questions' => [
                [
                    'title' => 'Question Without Alternatives',
                    'content' => 'No alternatives',
                    'status' => 'Active',
                    'type' => 'Multipla',
                ],
            ],
        ];

        $response = $this->postJson('/api/questoescolecao', $data);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['questions.0.alternatives']);
    }

    public function test_cannot_create_question_collection_without_questions()
    {
        $user = SystemUser::factory()->create(['tipo' => 'ADM', 'status' => 'Ativo']);
        Passport::actingAs($user);

        $materia = Materias::factory()->create();

        $data = [
            'title' => 'Collection Without Questions',
            'description' => 'Should fail',
            'materia' => $materia->id,
            'type' => 'Exam',
            'due_date' => now()->addDays(7)->toDateString(),
        ];

        $response = $this->postJson('/api/questoescolecao', $data);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['questions']);
    }
}
