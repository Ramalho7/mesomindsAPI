<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\materias>
 */
class MateriasFactory extends Factory
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
            'nome' => $this->faker->name(),
            'descricao' => $this->faker->sentence(),
            'status' => $this->faker->randomElement($status),
            'criador' => \App\Models\SystemUser::factory()->create()->id,
            'ultimo_editor' => \App\Models\SystemUser::factory()->create()->id,
        ];
    }
}
