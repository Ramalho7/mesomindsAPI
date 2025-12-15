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
            $table->string('description');

            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('slug')->nullable();
            $table->longText('icon')->nullable();
            $table->string('color', 50)->nullable();

            $table->ulid('created_by');
            $table->foreign('created_by')
                ->references('id')
                ->on('system_users')
                ->cascadeOnDelete();

            $table->ulid('updated_by')
                ->nullable();
            $table->foreign('updated_by')
                ->references('id')
                ->on('system_users')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_types');
    }
};
