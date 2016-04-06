<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('cart',function(Blueprint $table))
            {
                $table->increments('cart_id');
                $table->integer('stock_id');
                $table->integer('customer_id');
                $table->integer('quantity');
                $table->double('unit_price',15,2);
                $table->double('total_price',15,2);
            }

            $table->primary('cart_id');
           
            $table->foreign('stock_id')
                ->references('stock_id')->on('stock')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
       
            $table->foreign('customer_id')
                    ->references('customer_id')->on('customers')
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
        Schema::drop('cart');
    }
}
