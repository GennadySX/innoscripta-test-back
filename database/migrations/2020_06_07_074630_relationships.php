<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pizza_id')->references('id')->on('pizzas')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pizza_type_id')->references('id')->on('pizza_types')
                ->onUpdate('cascade')->onDelete('cascade');

        });



        Schema::table('order_additions', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('addition_id')->references('id')->on('additions')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('lang_boxes', function (Blueprint $table) {
            $table->foreign('language_id')->references('id')->on('languages')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
