<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('content_content_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained('conteudos')->onDelete('cascade');
            $table->foreignId('content_image_id')->constrained('content_images')->onDelete('cascade');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content_content_images');
    }
};
