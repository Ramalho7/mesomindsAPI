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
        Schema::create('class_activity_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('collection_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->dateTime('assigned_at')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();

            $table->foreign('class_id')->references('id')->on('turmas')->onDelete('cascade');
            $table->foreign('collection_id')->references('id')->on('question_collections')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('system_users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('system_users')->onDelete('cascade');
            
            $table->unique(['class_id', 'collection_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_activity_pivot'); 
    }
};