<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gallery_id')->unsigned();
            $table->string('caption')->nullable();
            $table->string('status');
            $table->text('image');
            $table->timestamps();
        });
        Schema::table('gallery_images', function(Blueprint $table){
            $table->foreign('gallery_id')->references('id')->on('gallery')->onDelete('cascade');
            
         
        });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_images');
    }
}
