<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('layer_withs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Primary Product
            $table->foreignId('layer_with_one')->nullable()->constrained('products')->onDelete('cascade'); // Layer Product 1
            $table->foreignId('layer_with_two')->nullable()->constrained('products')->onDelete('cascade'); // Layer Product 2
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layer_withs');
    }
};
