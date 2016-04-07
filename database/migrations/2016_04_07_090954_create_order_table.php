<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('order',function(Blueprint $table))
            {
                $table->increments('order_id');
                $table->integer('cart_id');
                $table->integer('order_number');
                $table->integer('quantity');
                $table->double('total_price',15,2);
                $table->timestamp('order_date_time');
                $table->string('payment_mode');
                $table->integer('address_id');

            }

            $table->primary('order_id');
           
            $table->foreign('cart_id')
                ->references('cart_id')->on('cart')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
       
            $table->foreign('address_id')
                    ->references('address_id')->on('address')
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
        Schema::drop('order');
    }
}
