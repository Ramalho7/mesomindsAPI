<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conteudo>
 */
class ConteudoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status = [ 'Ativo', 'Inativo', 'Rascunho' ];

        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'criador' => \App\Models\SystemUser::factory()->create()->id,
            'ultimo_editor' => \App\Models\SystemUser::factory()->create()->id,
            'status' => $this->faker->randomElement($status),
            'content_types_id' => \App\Models\ContentType::factory()->create()->id,
            'content_tags_id' => \App\Models\ContentTag::factory()->create()->id,
        ];
    }
}
