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
        Schema::create('question_activity_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collection_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->integer('order')->nullable()->comment('Question order within collection');
            $table->timestamps();

            $table->foreign('collection_id')->references('id')->on('question_collections')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('system_users')->onDelete('cascade');

            $table->unique(['collection_id', 'question_id']);
            $table->index('collection_id');
            $table->index(['collection_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_activity_pivot');
    }
};
