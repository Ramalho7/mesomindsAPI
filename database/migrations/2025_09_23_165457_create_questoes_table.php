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
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('corpo');
            $table->unsignedBigInteger('materia');
            $table->unsignedBigInteger('ultimo_editor')->nullable();
            $table->unsignedBigInteger('criador');
            $table->enum('tipo', ["Multipla", "VerdadeiroFalso", "aberta"]);
            $table->enum('status', ["Ativo", "Inativo"]);
            $table->timestamps();

            $table->foreign('criador')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('ultimo_editor')->references('id')->on('system_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questoes');
    }
};
