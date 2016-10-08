<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('company')->nullable();
            $table->string('jobtitle')->nullable();
            $table->binary('profilepic')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        // Upgrade Profile Pic to be a `mediumblob` so that it's approx 16MB (rather than 16kb)!
        DB::statement("ALTER TABLE judges MODIFY profilepic MEDIUMBLOB");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('judges');
    }
}
