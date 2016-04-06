<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaDeterministicValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_deterministic_value', function (Blueprint $table) {
            $table->increments('pa_deterministic_value_id');
            $table->string('pa_deterministic_value_name');

            $table->primary('pa_deterministic_value_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pa_deterministic_value');
    }
}
