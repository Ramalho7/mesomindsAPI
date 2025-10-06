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
        Schema::create('turma_alunos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turma');
            $table->unsignedBigInteger('id_aluno');
            $table->unsignedBigInteger('criador');
            $table->unsignedBigInteger('ultimo_editor');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();

            $table->foreign('id_turma')->references('id')->on('turmas')->onDelete('cascade');
            $table->foreign('id_aluno')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('criador')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('ultimo_editor')->references('id')->on('system_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_alunos');
    }
};