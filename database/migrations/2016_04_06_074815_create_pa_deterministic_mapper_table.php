<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaDeterministicMapperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_deterministic_mapper', function (Blueprint $table) {
            $table->increments('pa_deterministic_mapper_id');
            $table->integer('product_attribute_mapper_id');
            $table->integer('pa_deterministic_value_id');
            
            $table->primary('pa_deterministic_mapper_id');

            $table->foreign('pa_deterministic_value_id')
                    ->references('pa_deterministic_value_id')->on('pa_deterministic_value')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');

            $table->foreign('product_attribute_mapper_id')
                    ->references('product_attribute_mapper_id')->on('product_attribute_mapper')
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
        Schema::drop('pa_deterministic_mapper');
    }
}
