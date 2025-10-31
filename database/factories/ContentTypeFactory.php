<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contentType>
 */
class ContentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $statuses = ['Ativo', 'Inativo'];
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'criador' => \App\Models\SystemUser::factory()->create()->id,
            'ultimo_editor' => \App\Models\SystemUser::factory()->create()->id,
            'status' => $this->faker->randomElement($statuses),
        ];
    }
}
