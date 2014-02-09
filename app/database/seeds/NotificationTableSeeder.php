<?php

class NotificationTableSeeder extends Seeder {

	public function run()
	{
		DB::table('notifications')->delete();

		Notification::create(array(
			'title'				=> "Something is up",
			'notification'		=> 'This is some sort of message',
			'user_id'			=> 2,
			'severity_id'		=> 1,
			'resources_type_id'	=> 1,
			'resource_id'		=> 1,
			'is_active'			=> 1,
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));
	}
}