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
            $table->string('welcome_text');
            $table->string('event_link');
            $table->string('event_admin_name');
            $table->string('event_admin_email');
            $table->text('welcome_email_to_entrant');
            $table->text('payment_receieved_to_entrant');
            $table->text('misc');
            $table->boolean('payment_testmode')->default(0);
            $table->string('entries_close_date', 10);
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
