<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class SystemUserSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\SystemUser::factory()->count(20)->create();
        Faker::create()->unique(true);
    }
}
