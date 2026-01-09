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
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'top_icone')) {
                $table->string('top_icone')->nullable();
            }
            if (!Schema::hasColumn('products', 'heart_icone')) {
                $table->string('heart_icone')->nullable();
            }
            if (!Schema::hasColumn('products', 'base_icone')) {
                $table->string('base_icone')->nullable();
            }
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
