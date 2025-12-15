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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->integer('limite');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->ulid('responsavel');
            $table->ulid('created_by');
            $table->ulid('updated_by');
            $table->timestamps();

            $table->foreign('responsavel')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('system_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
