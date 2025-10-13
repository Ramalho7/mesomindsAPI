<?php

namespace Database\Seeders;

use App\Models\Alternativa;
use App\Models\Materia;
use App\Models\Questao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materia::factory()->count(3)->has(
                Questao::factory()->count(5)->has(
                    Alternativa::factory()->count(4))
        )->create();
    }
}
