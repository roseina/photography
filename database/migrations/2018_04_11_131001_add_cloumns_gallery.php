<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCloumnsGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gallery', function (Blueprint $table) {
            if(!Schema::hasColumn('gallery','image'))
                {
                    $table->string('image')->after('status')->nullable();
                }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gallery', function (Blueprint $table) {
           if(Schema::hasColumn('gallery','image'))
                {
                    $table->dropColumn('image');
                }
        });
    }
}
