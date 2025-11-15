<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Content::factory()->count(20)->create();
    }
}
