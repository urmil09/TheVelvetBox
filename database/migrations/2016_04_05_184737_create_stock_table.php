<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('stock', function (Blueprint $table) {
            $table->increments('stock_id');
            $table->integer('product_id');
            $table->integer('color');
            $table->integer('size');
            $table->integer('quantity');
            $table->integer('unit_price');
            
            $table->primary('stock_id');

            $table->foreign('product_id')
                    ->references('product_id')->on('products')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock');
    }
}
