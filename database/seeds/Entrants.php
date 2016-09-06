<?php

use Illuminate\Database\Seeder;

class Entrants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$entrant = \App\Entrant::create(
			[
				'first_name' => 'Fred',
				'surname' => 'Bradley',
				'email' => 'fred.bradley@studentradio.org.uk',
			]	
		);
		$contacts = $entrant->contacts()->create([
			'address'=>'Hawthorn Lane',
			'postcode' => 'GU22 0BQ'
		]);

    }
}
