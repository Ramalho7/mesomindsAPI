<?php

namespace Database\Seeders;

use App\Models\Alternativa;
use App\Models\SystemUser;
use App\Models\Questao;
use Database\Factories\QuestoesFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SystemUserSeeder::class);
        $this->call(MateriaSeeder::class);
        // $this->call(QuestaoSeeder::class);
        // $this->call(AlternativaSeeder::class);
    }
}
