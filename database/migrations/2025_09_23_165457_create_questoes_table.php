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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->longText('correction');
            $table->unsignedBigInteger('materia_id');
            $table->ulid('created_by');
            $table->ulid('updated_by')->nullable();
            $table->enum('type', ['Multipla', 'VerdadeiroFalso', 'Aberta'])->default('Multipla');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('system_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
