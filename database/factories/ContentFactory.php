<?php

namespace Database\Factories;

use App\Models\Content;
use App\Models\ContentTag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status = ['draft', 'inactive', 'archived', 'published', 'active'];

        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'created_by' => \App\Models\SystemUser::factory()->create()->id,
            'updated_by' => \App\Models\SystemUser::factory()->create()->id,
            'status' => $this->faker->randomElement($status),
            'content_types_id' => \App\Models\ContentType::factory()->create()->id,
        ];
    }

    public function withTags(int $count = 3): self
    {
        return $this->afterCreating(function (Content $content) use ($count) {
            $tags = ContentTag::factory()->count($count)->create();
            $content->contentTags()->attach($tags->pluck('id'));
        });
    }
}
