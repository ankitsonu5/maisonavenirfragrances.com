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
        Schema::table('products', function (Blueprint $table) {
            $table->string('primary_imagetwo')->nullable()->after('primary_image'); // Add after existing primary_image column
            $table->string('primary_imagethree')->nullable()->after('primary_imagetwo'); // Add after primary_imagetwo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};

// php artisan migrate --path=database/migrations/2025_01_23_070004_add_images_to_products_table.php
