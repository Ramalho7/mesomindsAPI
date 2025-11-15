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
            'nome' => 'Administrador',
            'email' => 'admin@mesominds.com',
            'password' => bcrypt('admin123'),
            'tipo' => 'ADM',
            'status' => 'Ativo',
            'criador' => null,
        ]);

        SystemUser::create([
            'nome' => 'Moderador',
            'email' => 'moderador@mesominds.com',
            'password' => bcrypt('mod123'),
            'tipo' => 'Moderador',
            'status' => 'Ativo',
            'criador' => null,
        ]);

        SystemUser::create([
            'nome' => 'Operador',
            'email' => 'operador@mesominds.com',
            'password' => bcrypt('op123'),
            'tipo' => 'Operador',
            'status' => 'Ativo',
            'criador' => null,
        ]);

        SystemUser::factory()->count(5)->create();
        Faker::create()->unique(true);
    }
}
