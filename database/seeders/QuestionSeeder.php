<?php

namespace Database\Seeders;

use App\Models\question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        question::factory()->count(10)->create();
        Faker::create()->unique(true);
    }
}
