<?php

class MedicationTableSeeder extends Seeder {

	public function run()
	{
		DB::table('medications')->delete();

		Medication::create(array(
			'user_id'		=> 4,
			'name'			=> 'Adderall',
			'dosage'		=> '100 mg',
			'requirements'	=> 'Take 1 to 3 times daily with or without food.',
			'notes'			=> 'Do not exceed 12 tablets within a 24 hour period',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 1,
			'name'			=> 'Vicodin',
			'dosage'		=> '50 mg',
			'requirements'	=> 'Take once by mouth every 4 hours as needed.',
			'notes'			=> 'Based on your weight, do not take more than 6 tablets in a 24 hour period',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));
	}
}