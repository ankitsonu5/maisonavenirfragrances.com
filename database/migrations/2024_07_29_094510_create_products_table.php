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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //collections   tabel forenkey 
            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');

            $table->string('name');
            $table->float('short_description');
            $table->text('description');
            $table->string('card_image');
            $table->string('maine_image');
            $table->string('left_image');
            $table->string('right_up_image');
            $table->string('right_dowen_image');

            $table->string('fragrance_icone');
            $table->string('fragrance_title');
            $table->string('fragrance_banner');
            $table->string('fragrance_banner_title');




            $table->string('topnote_icone');
            $table->string('topnote_title');
            $table->string('topnote_banner');
            $table->string('topnote_banner_title');




            $table->string('heartnote_icone');
            $table->string('heartnote_title');
            $table->string('heartnote_banner');
            $table->string('heartnote_banner_title');


            $table->string('basenote_icone');
            $table->string('basenote_title');
            $table->string('basenote_banner');
            $table->string('basenote_banner_title');

            $table->string('slug');


        
            $table->string('status')->default('1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
