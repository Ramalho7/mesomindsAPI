<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ContentTag::factory()->count(20)->create();
    }
}
