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
        Schema::create('system_users', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('cpf', 11)->unique();
            $table->enum('tipo', ['Professor', 'Aluno', 'ADM', 'Moderador', 'Operador'])->default('Aluno');
            $table->unsignedBigInteger('criador')->nullable();
            $table->unsignedBigInteger('ultimo_editor')->nullable();
            $table->enum('status', ['Ativo', 'Inativo', 'Bloqueado'])->default('Ativo');
            $table->timestamps();

            $table->foreign('criador')->references('id')->on('system_users')->onDelete('set null');
            $table->foreign('ultimo_editor')->references('id')->on('system_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_users');
    }
};
