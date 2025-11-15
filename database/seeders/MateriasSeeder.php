<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Materias::factory()->count(20)->create();
    }
}
