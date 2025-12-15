<?php

namespace Database\Seeders;

use App\Models\SystemUser;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SystemUserSeeder extends Seeder
{
    public function run(): void
    {

        SystemUser::create([
            'name' => 'Administrador',
            'email' => 'admin@mesominds.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'status' => 'active',
            'created_by' => null,
        ]);

        SystemUser::create([
            'name' => 'Moderador',
            'email' => 'moderador@mesominds.com',
            'password' => bcrypt('mod123'),
            'role' => 'moderator',
            'status' => 'active',
            'created_by' => null,
        ]);

        SystemUser::create([
            'name' => 'Operador',
            'email' => 'operador@mesominds.com',
            'password' => bcrypt('op123'),
            'role' => 'operator',
            'status' => 'active',
            'created_by' => null,
        ]);

        SystemUser::factory()->count(5)->create();
        Faker::create()->unique(true);
    }
}
