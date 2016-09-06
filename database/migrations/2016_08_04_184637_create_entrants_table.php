<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrants', function (Blueprint $table) {
            $table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('company')->nullable();
            $table->string('jobtitle')->nullable();
            $table->integer('contacts_id')->unique()->nullable();
            $table->text('profilepic')->nullable();
            $table->tinyInteger('acl')->default(1);
            $table->rememberToken();
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
        Schema::drop('entrants');
    }
}
