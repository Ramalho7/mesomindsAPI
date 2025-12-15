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
        Schema::create('content_tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag_name', 255);
            $table->boolean('is_moderator_only')->default(false);
            $table->integer('count')->default(0);
            $table->string('description', 255);
            $table->string('slug', 50)->nullable();
            $table->string('color', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->softDeletes();

            $table->ulid('created_by');
            $table->foreign('created_by')
                ->references('id')
                ->on('system_users')
                ->cascadeOnDelete();

            $table->ulid('updated_by')->nullable();
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
        Schema::dropIfExists('content_tags');
    }
};
