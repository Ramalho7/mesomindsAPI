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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->longText('body');
            $table->integer('duration_minutes')->nullable();

            $table->foreignId('id_materia')
                ->nullable()
                ->constrained('materias')
                ->cascadeOnDelete();

            $table->foreignId('content_types_id')
                ->constrained('content_types')
                ->restrictOnDelete();

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

            $table->foreignId('content_tags_id')
                ->constrained('content_tags')
                ->restrictOnDelete();

            $table->enum('status', ['draft', 'inactive', 'archived', 'published', 'active'])->default('draft');

            $table->index('status');
            $table->index('published_at');
            $table->index('created_by');
            $table->index('updated_by');
            $table->index('deleted_at');

            if (config('database.default') === 'mysql') {
                $table->fullText(['title', 'body']);
            }

            $table->index('content_tags_id');
            $table->index('content_types_id');

            $table->softDeletes();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
