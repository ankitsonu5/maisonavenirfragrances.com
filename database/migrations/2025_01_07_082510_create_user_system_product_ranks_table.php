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
        Schema::create('user_system_product_ranks', function (Blueprint $table) {
            $table->id();

            // Foreign key to user_system_tracking
            $table->foreignId('user_system_tracking_id')
                ->constrained('user_system_trackings')
                ->onDelete('cascade'); // Deletes record if the parent record is deleted

            // Foreign keys for products
            $table->foreignId('rankone_product_id')
                ->nullable()
                ->constrained('products')
                ->onDelete('cascade');

            $table->foreignId('ranktwo_product_id')
                ->nullable()
                ->constrained('products')
                ->onDelete('cascade');

            $table->foreignId('rankthree_product_id')
                ->nullable()
                ->constrained('products')
                ->onDelete('cascade');

            // JSON column for moods, ingredients, occasions, etc.
            $table->json('preferences')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_system_product_ranks');
    }
};


//  php artisan migrate --path=database/migrations/2025_01_21_190300_create_enquiries_table.php
