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
        Schema::create('blog_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image')->nullable(); // Store serialized JSON for drag-and-drop components
            $table->text('content'); // Store serialized JSON for drag-and-drop components
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_pages');
    }
};
