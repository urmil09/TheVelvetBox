<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributeMapperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attribute_mapper', function (Blueprint $table) {
            $table->increments('product_attribute_mapper_id');
            $table->integer('product_id');
            $table->integer('pa_id');            

            $table->primary('product_attribute_mapper_id');

            $table->foreign('product_id')
                    ->references('product_id')->on('products')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');

            $table->foreign('pa_id')
                    ->references('pa_id')->on('product_atribute_pool')
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
         Schema::drop('product_attribute_mapper');
    }
}
