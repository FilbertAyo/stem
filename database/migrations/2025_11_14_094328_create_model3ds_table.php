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
        Schema::create('model3ds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->string('name');
            $table->string('file')->nullable(); // GLB file path
            $table->string('thumbnail')->nullable(); // Thumbnail image path
            $table->text('description')->nullable();
            $table->text('tags')->nullable(); // Comma-separated keywords
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model3ds');
    }
};
