<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('content_types', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->unique();
            $table->string('description', 255);

            $table->foreignId('criador')
                ->constrained('system_users')
                ->cascadeOnDelete();

            $table->foreignId('ultimo_editor')
                ->nullable()
                ->constrained('system_users')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_content_type');
    }
};
