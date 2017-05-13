<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons_users', function (Blueprint $table) {
            $table->increments('coupon_user_id');
            $table->integer('coupon_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('use_status')->default(0);
            $table->dateTime('use_date');
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
        Schema::drop('coupons_users');
    }
}
