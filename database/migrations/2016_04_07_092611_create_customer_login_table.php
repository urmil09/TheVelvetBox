<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_login',function(Blueprint $table))
            {
                $table->string('customer_username');
                $table->integer('customer_id');
                $table->string('customer_password');

            }

            $table->primary('customer_username');
           
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
        Schema::drop('customer_login');
    }
}
