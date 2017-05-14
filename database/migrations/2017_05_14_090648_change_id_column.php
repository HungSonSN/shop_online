<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('authors_categories', function (Blueprint $table) {
           $table->renameColumn('author_categorie_id', 'id');
       });

       Schema::table('categories_publishers', function (Blueprint $table) {
           $table->renameColumn('category_publisher_id', 'id');
       });       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('authors_categories', function (Blueprint $table) {
           $table->renameColumn('id', 'author_categorie_id');
       });

       Schema::table('categories_publishers', function (Blueprint $table) {
           $table->renameColumn('id', 'category_publisher_id');
       });  
    }
}
