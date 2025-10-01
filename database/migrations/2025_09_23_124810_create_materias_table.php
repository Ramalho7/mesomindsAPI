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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('descricao');
            $table->unsignedBigInteger('criador');
            $table->enum('status', ["Ativo", "Inativo"])->default('Ativo');
            $table->unsignedBigInteger('ultimo_editor')->nullable();
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
        Schema::dropIfExists('materias');
    }
};
