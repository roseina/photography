<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsHomecomponent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homecomponent', function (Blueprint $table) {
            if(!Schema::hasColumn('homecomponent','url'))
                {
                    $table->string('url')->after('title')->nullable();
                }
            });
        Schema::table('pages', function (Blueprint $table) {
            if(!Schema::hasColumn('pages','position'))
                {
                    $table->integer('position')->after('page_title')->nullable();
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
        Schema::table('homecomponent', function (Blueprint $table) {
          if(Schema::hasColumn('homecomponent','url'))
            {
                $table->dropColumn('url');
            }
        });
        Schema::table('pages', function (Blueprint $table) {
            if(Schema::hasColumn('pages','position'))
                {
                    $table->dropColumn('position');

                }
            });
        
    }

}
