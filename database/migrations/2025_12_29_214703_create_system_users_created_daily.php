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
            CREATE VIEW system_users_created_daily AS
            SELECT
                DATE(created_at) AS day,
                COUNT(*) AS total_users,
                ROUND(
                    CASE
                        WHEN LAG(COUNT(*)) OVER (ORDER BY DATE(created_at)) IS NULL THEN 0
                        WHEN LAG(COUNT(*)) OVER (ORDER BY DATE(created_at)) = 0 THEN 0
                        ELSE ((COUNT(*) - LAG(COUNT(*)) OVER (ORDER BY DATE(created_at))) * 100.0) /
                             LAG(COUNT(*)) OVER (ORDER BY DATE(created_at))
                    END,
                    2
                ) AS growth_percentage
            FROM system_users
            WHERE created_at >= CURRENT_DATE - INTERVAL 30 DAY
            GROUP BY DATE(created_at)
            ORDER BY day;
        SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS system_users_created_daily');
    }
};
