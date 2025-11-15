<?php

namespace Database\Factories;

use App\Models\Alternative;
use App\Models\Materias;
use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Multipla', 'VerdadeiroFalso', 'Aberta'];
        $status = ['Active', 'Inactive'];

        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'correction' => $this->faker->paragraph(),
            'materia' => Materias::factory(),
            'ultimo_editor' => SystemUser::factory()->create()->id,
            'criador' => SystemUser::factory()->create()->id,
            'type' => $this->faker->randomElement($types),
            'status' => $this->faker->randomElement($status),
        ];
    }

    public function withAlternatives(int $count = 4): self
    {
        return $this->afterCreating(function ($question) use ($count) {
            Alternative::factory()->count($count)->create([
                'question_id' => $question->id,
            ]);
        });
    }
}
