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
            $table->string('nome', 255)->unique();
            $table->string('descricao');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();

            $table->ulid('created_by');

            $table->foreign('created_by')->references('id')->on('system_users')->onDelete('cascade');

            $table->ulid('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('system_users')->onDelete('set null');
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
