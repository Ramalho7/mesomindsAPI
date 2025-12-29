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
        CREATE VIEW inactive_system_users_view AS
        SELECT id, name, email, created_at, updated_at, created_by, updated_by, status
        FROM system_users
        WHERE status = 'inactive';
        SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS inactive_system_users_view');
    }
};
