<?php

namespace Database\Factories;

use App\Models\Materias;
use App\Models\Question;
use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionCollection>
 */
class QuestionCollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Exam', 'Simulation', 'Activity', 'Exercise'];
        $status = ['Active', 'Inactive'];
        $user = SystemUser::factory()->create();

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(150),
            'subject_id' => Materias::factory(),
            'type' => $this->faker->randomElement($types),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'created_by' => $user->id,
            'updated_by' => $user->id,
            'status' => $this->faker->randomElement($status),
        ];
    }

    public function withQuestions(int $count = 5): self
    {
        return $this->afterCreating(function ($collection) use ($count) {
            $questions = Question::factory()
                ->count($count)
                ->state(function () use ($collection) {
                    return [
                        'materia_id' => $collection->subject_id,
                    ];
                })
                ->withAlternatives(4)
                ->create();

            $questions->each(function ($question, $index) use ($collection) {
                $collection->questions()->attach($question->id, [
                    'status' => 'Active',
                    'order' => $index + 1,
                    'created_by' => $collection->created_by,
                    'updated_by' => $collection->updated_by,
                ]);
            });
        });
    }

    public function asSimulation(): self
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => 'Simulation',
                'title' => 'Simulado - '.$this->faker->word(),
            ];
        });
    }

    public function asExam(): self
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => 'Exam',
                'title' => 'Prova - '.$this->faker->word(),
            ];
        });
    }

    public function asActivity(): self
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => 'Activity',
                'title' => 'Atividade - '.$this->faker->word(),
            ];
        });
    }

    public function asExercise(): self
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => 'Exercise',
                'title' => 'Exercício - '.$this->faker->word(),
            ];
        });
    }
}
