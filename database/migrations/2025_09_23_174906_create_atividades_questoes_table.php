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
        Schema::create('atividades_questoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_atividade');
            $table->unsignedBigInteger('id_questao');
            $table->unsignedBigInteger('criador');
            $table->unsignedBigInteger('ultimo_editor');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();

            $table->foreign('id_atividade')->references('id')->on('atividades')->onDelete('cascade');
            $table->foreign('id_questao')->references('id')->on('questoes')->onDelete('cascade');
            $table->foreign('criador')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('ultimo_editor')->references('id')->on('system_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades_questoes');
    }
};