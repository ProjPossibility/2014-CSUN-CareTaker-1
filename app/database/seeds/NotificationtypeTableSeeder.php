<?php

class NotificationtypeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('notificationtypes')->delete();

		Notificationtype::create(array(
			'id'				=> 1,
			'display_name'		=> "Medication",
			'system_name'		=> "medication"
		));

		Notificationtype::create(array(
			'id'				=> 2,
			'display_name'		=> "Weather",
			'system_name'		=> "weather"
		));

		Notificationtype::create(array(
			'id'				=> 3,
			'display_name'		=> "Appointment",
			'system_name'		=> "appointment"
		));

		Notificationtype::create(array(
			'id'				=> 4,
			'display_name'		=> "Other",
			'system_name'		=> "other"
		));
	}
}