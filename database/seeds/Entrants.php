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
				'password' => '$2y$10$dqDiY0W0fPboTG7eftzbnuxA9Enbj7oATS.w6LYwJQgjSB89nCucW'
			]	
		);
		$contacts = $entrant->contacts()->create([
			'address'=>'Hawthorn Lane',
			'postcode' => 'GU22 0BQ'
		]);
		$update = \App\Entrant::find($entrant->id);
		$update->contacts_id = $contacts->id;
		$update->save();


    }
}
