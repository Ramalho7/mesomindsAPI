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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->unsignedBigInteger('materia');
            $table->enum('tipo', ['Prova', 'Simulado'])->default('Prova');
            $table->timestamp('prazoFinal');
            $table->unsignedBigInteger('criador');
            $table->unsignedBigInteger('editor');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();

            $table->foreign('materia')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('criador')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('editor')->references('id')->on('system_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};