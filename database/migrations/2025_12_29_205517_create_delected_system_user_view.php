<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(<<<'SQL'
            CREATE VIEW delected_system_user_view AS
            SELECT id, name, email, created_at, updated_at, created_by, updated_by, status, deleted_at
            FROM system_users
            WHERE deleted_at IS NOT NULL
            ORDER BY deleted_at DESC;
        SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS delected_system_user_view');
    }
};
