<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEntrantsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('entrants', function ($table) {
		$table->integer('contacts_id')->unsigned()->change();
		$table->foreign('contacts_id')->references('id')->on('entrant_contacts')->onDelete('restrict');
        });
        Schema::table('entrant_contacts', function ($table) {
	        $table->integer('entrant_id')->unsigned()->change();
	        $table->foreign('entrant_id')->references('id')->on('entrants')->onDelete('restrict');
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
		Schema::table('entrants', function ($table) {
            $table->dropForeign('entrants_contacts_id_foreign');
        }); 
        
        Schema::table('entrant_contacts', function ($table) {
	       $table->dropForeign('entrant_contacts_entrant_id_foreign'); 
        });
    }
}
