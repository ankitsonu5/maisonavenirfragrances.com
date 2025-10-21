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
            $table->string('keywords')->nullable();
            $table->string('top-notes-image')->nullable();
            $table->string('aqua')->nullable();
            $table->string('woody')->nullable();
            $table->string('floral')->nullable();
            $table->string('best-time-to-use')->nullable();
            
            $table->string('vegan')->nullable();
            $table->string('natural-oils')->nullable();
            $table->string('essential-oils')->nullable();

            $table->string('insiration')->nullable();
            $table->string('insidethefragran')->nullable();
            $table->string('notes')->nullable();

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
