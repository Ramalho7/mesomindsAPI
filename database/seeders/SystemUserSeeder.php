<?php

namespace Database\Seeders;

use App\Models\SystemUser;
use Faker\Factory as Faker;
use Hash;
use Illuminate\Database\Seeder;

class SystemUserSeeder extends Seeder
{
    public function run(): void
    {

        SystemUser::create([
            'name' => 'Administrador',
            'email' => 'admin@mesominds.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'status' => 'active',
            'created_by' => null,
        ]);

        SystemUser::create([
            'name' => 'Moderador',
            'email' => 'moderador@mesominds.com',
            'password' => Hash::make('mod123'),
            'role' => 'moderator',
            'status' => 'active',
            'created_by' => null,
        ]);

        SystemUser::create([
            'name' => 'Operador',
            'email' => 'operator@mesominds.com',
            'password' => Hash::make('op123'),
            'role' => 'operator',
            'status' => 'active',
            'created_by' => null,
        ]);

        SystemUser::factory()->count(5)->create();
        Faker::create()->unique(true);
    }
}
