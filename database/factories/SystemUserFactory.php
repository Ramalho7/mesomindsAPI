<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SystemUser>
 */
class SystemUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Professor', 'Aluno', 'ADM', 'Moderador', 'Operador'];
        $statuses = ['Ativo', 'Inativo', 'Bloqueado'];

        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'cpf' => $this->faker->unique()->numerify('###########'),
            'tipo' => $this->faker->randomElement($types),
            'status' => $this->faker->randomElement($statuses),
        ];
    }
}
