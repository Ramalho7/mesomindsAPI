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
            $table->unsignedBigInteger('id_materia');
            $table->unsignedBigInteger('criador');
            $table->unsignedBigInteger('ultimo_editor')->nullable();
            $table->enum('status', ['Ativo', 'Inativo', 'Rascunho'])->default('Ativo');
            $table->timestamp('published_at');
            $table->timestamps();

            // $table->foreign('id_materia')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('criador')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('ultimo_editor')->references('id')->on('system_users')->onDelete('set null');
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
