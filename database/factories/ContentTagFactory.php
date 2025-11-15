<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContentTag>
 */
class ContentTagFactory extends Factory
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
            'tag_name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'criador' => \App\Models\SystemUser::factory()->create()->id,
            'ultimo_editor' => \App\Models\SystemUser::factory()->create()->id,
            'is_moderator_only' => $this->faker->boolean(),
            'count' => $this->faker->randomNumber(),
            'status' => $this->faker->randomElement($statuses),
        ];
    }
}
