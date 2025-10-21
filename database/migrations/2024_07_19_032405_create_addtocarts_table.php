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
        Schema::create('addtocarts', function (Blueprint $table) {
            $table->id();
            // foren key in user 
            $table->unsignedBigInteger('service_item_id');
            $table->foreign('service_item_id')->references('id')->on('service_items')->onDelete('cascade');
         
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          
            $table->string('quantity');
      
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtocarts');
    }
};
