<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function(Blueprint $table) {
            $table->foreign('author_id')->references('author_id')->on('authors')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('category_id')->references('category_id')->on('categories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('subject_id')->references('subject_id')->on('subjects')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('publisher_id')->references('publisher_id')->on('publishers')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('event_id')->references('event_id')->on('events')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('authors_categories', function(Blueprint $table) {
            $table->foreign('author_id')->references('author_id')->on('authors')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('category_id')->references('category_id')->on('categories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('categories_publishers', function(Blueprint $table) {
            $table->foreign('publisher_id')->references('publisher_id')->on('publishers')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('category_id')->references('category_id')->on('categories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('coupons_users', function(Blueprint $table) {
            $table->foreign('coupon_id')->references('coupon_id')->on('coupons')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('user_id')->references('user_id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('comments', function(Blueprint $table) {
            $table->foreign('book_id')->references('book_id')->on('books')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('user_id')->references('user_id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('read_books', function(Blueprint $table) {
            $table->foreign('book_id')->references('book_id')->on('books')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('user_id')->references('user_id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('like_books', function(Blueprint $table) {
            $table->foreign('book_id')->references('book_id')->on('books')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('user_id')->references('user_id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('evaluations', function(Blueprint $table) {
            $table->foreign('book_id')->references('book_id')->on('books')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('user_id')->references('user_id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('carts', function(Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('orders', function(Blueprint $table) {
            $table->foreign('book_id')->references('book_id')->on('books')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('cart_id')->references('cart_id')->on('carts')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function(Blueprint $table) {
            $table->dropForeign('books_author_id_foreign');
            $table->dropForeign('books_category_id_foreign');
            $table->dropForeign('books_subject_id_foreign');
            $table->dropForeign('books_publisher_id_foreign');
            $table->dropForeign('books_event_id_foreign');
        });

        Schema::table('authors_categories', function(Blueprint $table) {
            $table->dropForeign('authors_categories_author_id_foreign');
            $table->dropForeign('authors_categories_category_id_foreign');
        });

        Schema::table('categories_publishers', function(Blueprint $table) {
            $table->dropForeign('categories_publishers_publisher_id_foreign');
            $table->dropForeign('categories_publishers_category_id_foreign');
        });

        Schema::table('coupons_users', function(Blueprint $table) {
            $table->dropForeign('coupons_users_coupon_id_foreign');
            $table->dropForeign('coupons_users_user_id_foreign');
        });

        Schema::table('comments', function(Blueprint $table) {
            $table->dropForeign('comments_book_id_foreign');
            $table->dropForeign('comments_user_id_foreign');
        });

        Schema::table('read_books', function(Blueprint $table) {
            $table->dropForeign('read_books_book_id_foreign');
            $table->dropForeign('read_books_user_id_foreign');
        });

        Schema::table('like_books', function(Blueprint $table) {
            $table->dropForeign('like_books_book_id_foreign');
            $table->dropForeign('like_books_user_id_foreign');
        });

        Schema::table('evaluations', function(Blueprint $table) {
            $table->dropForeign('evaluations_book_id_foreign');
            $table->dropForeign('evaluations_user_id_foreign');
        });

        Schema::table('carts', function(Blueprint $table) {
            $table->dropForeign('carts_user_id_foreign');
        });

        Schema::table('orders', function(Blueprint $table) {
            $table->dropForeign('orders_book_id_foreign');
            $table->dropForeign('orders_cart_id_foreign');
        });
    }
}
