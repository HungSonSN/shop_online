<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryRelationInSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
        });

        Schema::table('subjects', function(Blueprint $table) {
            $table->foreign('category_id')->references('category_id')->on('categories')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });

        Schema::table('subjects', function(Blueprint $table) {
            $table->dropForeign('subjects_category_id_foreign');
        });        
    }
}
