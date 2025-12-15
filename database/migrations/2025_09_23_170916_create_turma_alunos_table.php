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
            $table->ulid('id_aluno');
            $table->ulid('created_by');
            $table->ulid('updated_by');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();

            $table->foreign('id_turma')->references('id')->on('turmas')->onDelete('cascade');
            $table->foreign('id_aluno')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('system_users')->onDelete('cascade');
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
