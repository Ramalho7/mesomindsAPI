<?php

namespace Database\Seeders;

use App\Models\alternative;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        alternative::factory()->count(3)->create();
        Faker::create()->unique(true);
    }
}
