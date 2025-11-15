<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('content_tag_pivot')->truncate();
        DB::table('contents')->truncate();
        DB::table('content_tags')->truncate();
        DB::table('content_types')->truncate();
        DB::table('materias')->truncate();
        DB::table('system_users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call([
            SystemUserSeeder::class,
            MateriasSeeder::class,
            ContentTagSeeder::class,
            ContentTypeSeeder::class,
            ContentSeeder::class,
            QuestionSeeder::class,
            QuestionCollectionSeeder::class,
        ]);
    }
}
