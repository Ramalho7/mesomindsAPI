<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alternative>
 */
class AlternativeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['Ativo', 'Inativo'];

        return [
            'question_id' => Question::factory(),
            'content' => $this->faker->sentence(),
            'correct' => $this->faker->boolean(),
            'criador' => \App\Models\SystemUser::factory()->create()->id,
            'ultimo_editor' => \App\Models\SystemUser::factory()->create()->id,
            'status' => $this->faker->randomElement($status),
        ];
    }
}
