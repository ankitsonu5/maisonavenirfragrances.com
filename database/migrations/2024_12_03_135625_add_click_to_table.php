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
        Schema::table('ingredients', function (Blueprint $table) {
            $table->string('click')->nullable();
        });

        Schema::table('fragrance_accords', function (Blueprint $table) {
            $table->string('click')->nullable();
        });

        Schema::table('fragrance_families', function (Blueprint $table) {
            $table->string('click')->nullable();
        });

        Schema::table('moods', function (Blueprint $table) {
            $table->string('click')->nullable();
        });

        Schema::table('occasions', function (Blueprint $table) {
            $table->string('click')->nullable();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->string('show_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ingredients', function (Blueprint $table) {
            $table->dropColumn('click');
        });

        Schema::table('fragrance_accords', function (Blueprint $table) {
            $table->dropColumn('click');
        });

        Schema::table('fragrance_families', function (Blueprint $table) {
            $table->dropColumn('click');
        });

        Schema::table('moods', function (Blueprint $table) {
            $table->dropColumn('click');
        });

        Schema::table('occasions', function (Blueprint $table) {
            $table->dropColumn('click');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('show_name');
        });
    }
};
