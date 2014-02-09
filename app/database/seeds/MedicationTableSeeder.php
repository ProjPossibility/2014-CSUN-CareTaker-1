<?php

class MedicationTableSeeder extends Seeder {

	public function run()
	{
		DB::table('medications')->delete();

		Medication::create(array(
			'user_id'		=> 1,
			'name'			=> 'Vicodin',
			'dosage'		=> '50 mg',
			'requirements'	=> 'Take once by mouth every 4 hours as needed.',
			'notes'			=> 'Based on your weight, do not take more than 6 tablets in a 24 hour period.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 2,
			'name'			=> 'Tylenol',
			'dosage'		=> '200 mg',
			'requirements'	=> 'Take once by mouth every 6 hours as needed.',
			'notes'			=> 'Do not take more than 4 tablets in a 24 hour period.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 3,
			'name'			=> 'Advil',
			'dosage'		=> '150 mg',
			'requirements'	=> 'Take once by mouth every 4 hours as needed.',
			'notes'			=> 'Do not take with Dr Pepper.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 4,
			'name'			=> 'Adderall',
			'dosage'		=> '100 mg',
			'requirements'	=> 'Take 1 to 3 times daily with or without food.',
			'notes'			=> 'Do not exceed 12 tablets within a 24 hour period.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 5,
			'name'			=> 'Mircozide',
			'dosage'		=> '200 mg',
			'requirements'	=> 'Take once by mouth every 24 hours.',
			'notes'			=> 'Recommended to be taken at the same time every day.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 6,
			'name'			=> 'Xanax',
			'dosage'		=> '75 mg',
			'requirements'	=> 'Take 1 to 2 times daily with or without food.',
			'notes'			=> 'Dosage may be increased by your doctor until the drug starts working well.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));
	}
}