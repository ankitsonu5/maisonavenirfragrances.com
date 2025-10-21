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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('image')->nullable();

            // Add sections and images manually
            $table->longText('section_one')->nullable();

            $table->longText('section_two')->nullable();


            $table->longText('section_three')->nullable();


            $table->longText('section_four')->nullable();


            $table->longText('section_five')->nullable();


            $table->longText('section_six')->nullable();


            $table->longText('section_seven')->nullable();


            $table->longText('section_eight')->nullable();


            $table->longText('section_nine')->nullable();

            $table->longText('section_ten')->nullable();


            $table->string('status')->nullable();
            $table->string('slug')->nullable();
            $table->string('order')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
