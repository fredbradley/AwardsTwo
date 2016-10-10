<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    

        Schema::create('awards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prefix')->unique();
            $table->integer('charity_discount')->default(0);
            $table->string('welcome_text')->nullable();
            $table->string('event_link')->nullable();
            $table->string('event_admin_name')->nullable();
            $table->string('event_admin_email')->nullable();
            $table->text('welcome_email_to_entrant')->nullable();
            $table->text('payment_receieved_to_entrant')->nullable();
            $table->text('misc')->nullable();
            $table->boolean('payment_testmode')->default(0);
            $table->string('entries_close_date', 10)->default(strtotime("+ 1 month"));
            $table->timestamps();
            $table->softDeletes();	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('awards');
    }
}
