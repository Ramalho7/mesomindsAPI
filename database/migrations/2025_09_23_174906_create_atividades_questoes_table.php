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
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('criador');
            $table->unsignedBigInteger('ultimo_editor');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();

            $table->foreign('id_atividade')->references('id')->on('atividades')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
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