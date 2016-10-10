<?php

use Illuminate\Database\Seeder;

class Awards extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$entrant = \App\Awards::create(
			[
				'name' => 'Student Radio Awards 2015',
				'prefix' => 'sra15',
			]	
		);
		$entrant = \App\Awards::create(
			[
				'name' => 'Student Radio Awards 2016',
				'prefix' => 'sra16',
			]	
		);
				$entrant = \App\Awards::create(
			[
				'name' => 'Student Radio Awards 2017',
				'prefix' => 'sra17',
			]	
		);

    }
}
