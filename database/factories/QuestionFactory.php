<?php

namespace Database\Factories;

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
        $status = ['Ativo', 'Inativo'];

        return [
            'title' => $this->faker->sentence(), 
            'content' => $this->faker->paragraph(), 
            'materia' => Materias::factory(), 
            'ultimo_editor' => SystemUser::factory()->create()->id, 
            'criador' => SystemUser::factory()->create()->id, 
            'type' => $this->faker->randomElement($types), 
            'status' => $this->faker->randomElement($status),
        ];
    }
}