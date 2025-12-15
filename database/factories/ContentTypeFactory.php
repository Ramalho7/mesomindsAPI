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

        $statuses = ['active', 'inactive'];

        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'created_by' => \App\Models\SystemUser::factory()->create()->id,
            'updated_by' => \App\Models\SystemUser::factory()->create()->id,
            'status' => $this->faker->randomElement($statuses),
        ];
    }
}
