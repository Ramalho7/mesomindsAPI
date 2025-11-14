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
        Schema::create('student_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->longText('answer')->nullable();
            $table->decimal('score', 5, 2)->nullable()->comment('Nota dada pelo professor');
            $table->longText('feedback')->nullable()->comment('Feedback do professor');
            $table->unsignedBigInteger('corrected_by')->nullable();
            $table->dateTime('submitted_at')->nullable();
            $table->dateTime('corrected_at')->nullable();
            $table->enum('status', ['Pending', 'Submitted', 'Corrected'])->default('Pending');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('collection_id')->references('id')->on('question_collections')->onDelete('cascade');
            $table->foreign('corrected_by')->references('id')->on('system_users')->onDelete('set null');

            $table->unique(['student_id', 'question_id', 'collection_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_answers');
    }
};
