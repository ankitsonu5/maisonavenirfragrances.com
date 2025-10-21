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

        Schema::table('moods', function (Blueprint $table) {
            $table->string('image_new')->nullable()->after('mood'); // Add image_new to moods table
        });

        Schema::table('occasions', function (Blueprint $table) {
            $table->string('image_new')->nullable()->after('occasion'); // Add image_new to occasions table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('moods_and_occasions_tables', function (Blueprint $table) {
            //
        });
    }
};
