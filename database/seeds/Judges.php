<?php

use Illuminate\Database\Seeder;

class Judges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$judge = \App\Judge::create(
			[
				'first_name' => 'Fred',
				'surname' => 'Bradley',
				'email' => 'hello@fredbradley.co.uk',
				'password' => '$2y$10$dqDiY0W0fPboTG7eftzbnuxA9Enbj7oATS.w6LYwJQgjSB89nCucW'
			]	
		);

    }
}
