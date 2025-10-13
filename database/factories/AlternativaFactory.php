<?php

namespace Database\Factories;

use App\Models\Questao;
use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alternativa>
 */
class AlternativaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'questao' => Questao::factory(),
            'valor' => $this->faker->sentence,
            'correta' => $this->faker->boolean,
            'criador' => SystemUser::factory(),
        ];
    }
}
