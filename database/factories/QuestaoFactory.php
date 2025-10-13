<?php

namespace Database\Factories;

use App\Models\Materia;
use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;
use PHPUnit\Event\Telemetry\System;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Questao>
 */
class QuestaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence,
            'corpo' => $this->faker->sentence(10),
            'materia' => Materia::factory(),
            'ultimo_editor' => null,
            'tipo' => $this->faker->randomElement(['Multipla', 'VerdadeiroFalso', 'aberta']),
            'status' => 'Ativo',
            'criador' => SystemUser::get()->random()->id,
        ];
    }
}
