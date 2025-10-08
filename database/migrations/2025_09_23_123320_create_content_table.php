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
        Schema::create('conteudos', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->longText('content');

            $table->foreignId('id_materia')
                ->nullable()
                ->constrained('materias')
                ->cascadeOnDelete();

            $table->foreignId('content_types_id')
                ->constrained('content_types')
                ->restrictOnDelete();

            $table->foreignId('image_id')
                ->nullable()
                ->constrained('content_images')
                ->nullOnDelete();

            $table->foreignId('criador')
                ->constrained('system_users')
                ->cascadeOnDelete();

            $table->foreignId('ultimo_editor')
                ->nullable()
                ->constrained('system_users')
                ->nullOnDelete();

        $table->foreignId('content_tags_id')
                ->constrained('content_tags')
                ->restrictOnDelete();

            $table->enum('status', ['Ativo', 'Inativo', 'Rascunho'])->default('Ativo');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conteudos');
    }
};
