<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('AppointmentTableSeeder');
		$this->call('MedicationListTableSeeder');
		$this->call('MedicationTableSeeder');
		$this->call('NotificationTableSeeder');
		$this->call('SeverityTableSeeder');
		$this->call('NotificationtypeTableSeeder');
	}

}