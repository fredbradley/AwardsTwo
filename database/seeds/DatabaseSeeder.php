<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	protected $tablesToTruncate = ['awards', 'coupons', 'entrants', 'entrant_contacts', 'judges', 'judge_groups'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Truncate all tables listed in the array (Disable foreign keys first so that truncate will run)
        DB::statement("SET foreign_key_checks=0");
    	foreach($this->tablesToTruncate as $table){
    		DB::table($table)->truncate();
    	}
        DB::statement("SET foreign_key_checks=1");


        //Order of the calls is import for foreign key constraints
        $this->call('Judges');         
        $this->call('Entrants');
       
    }
}

