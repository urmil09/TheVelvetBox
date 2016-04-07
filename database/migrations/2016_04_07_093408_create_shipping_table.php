<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping', function (Blueprint $table) {
            $table->increments('shipping_id');

            $table->integer('order_id');
            $table->string('delivery_boy');
            $table->timestamp('shipping_date');
            $table->string('shipping_status');
            $table->primary('shipping_id');

            $table->foreign('order_id')
                    ->references('order_id')->on('order')
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
        //
    }
}
