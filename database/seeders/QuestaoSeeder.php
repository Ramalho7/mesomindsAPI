<?php

namespace Database\Seeders;

use App\Models\Alternativa;
use App\Models\Questao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Questao::factory()->count(10)->has(
            Alternativa::factory()->count(4)
        )->create();
    }
}
