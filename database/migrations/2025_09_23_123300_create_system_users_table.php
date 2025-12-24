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
        Schema::create('system_users', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->enum('role', ['teacher', 'student', 'admin', 'moderator', 'operator'])->default('student');
            $table->ulid('created_by')->nullable();
            $table->ulid('updated_by')->nullable();
            $table->enum('status', ['active', 'inactive', 'banned', 'pending'])->default('active');
            $table->softDeletes();

            $table->timestamps();

            if (config('database.default') === 'mysql') {
                $table->fullText('name');
                $table->fullText('email');
            }

            $table->index('created_at');
            $table->index('updated_at');
            $table->index('deleted_at');
            $table->index('status');

            $table->foreign('created_by')->references('id')->on('system_users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('system_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_users');
    }
};
