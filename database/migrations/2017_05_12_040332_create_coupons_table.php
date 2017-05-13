<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('coupon_id');
            $table->string('coupon_code');
            $table->boolean('same_user_allow_flg')->default(false);
            $table->integer('same_user_use_limit');
            $table->integer('target');
            $table->boolean('is_available');
            $table->integer('discount_type');
            $table->float('discount_value');
            $table->dateTime('limit_start');
            $table->dateTime('limit_end');
            $table->dateTime('coupon_start_date');
            $table->boolean('coupon_limit_flg');
            $table->integer('coupon_limit_count');
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
        Schema::drop('coupons');
    }
}
