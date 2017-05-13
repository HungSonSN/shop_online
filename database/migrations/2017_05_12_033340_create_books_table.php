<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('name');
            $table->string('description', 65535);
            $table->string('front_photo');
            $table->string('back_photo');
            $table->float('orig_price');
            $table->float('system_discount');
            $table->integer('discount_value');
            $table->integer('total_page');
            $table->float('width_size');
            $table->float('length_size');
            $table->float('evaluation');
            $table->string('language');
            $table->string('code_product');
            $table->float('weight');
            $table->string('format');
            $table->dateTime('published_date');
            $table->integer('author_id')->unsigned();
            $table->integer('status')->default(0);
            $table->integer('category_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->integer('publisher_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->boolean('is_available')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
