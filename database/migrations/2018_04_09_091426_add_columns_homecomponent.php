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
        if(Schema::hasColumn('homecomponent','link'))
                {
                    $table->dropColumn('link');
                }
           
 if(!Schema::hasColumn('homecomponent','description'))
                {
                    $table->text('description')->after('url')->nullable();
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
       
         if(!Schema::hasColumn('homecomponent','link'))
                {
                    $table->string('link')->after('title')->nullable();
                }
           
 if(Schema::hasColumn('homecomponent','description'))
            {
                $table->dropColumn('description');
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
