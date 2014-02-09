<?php

class NotificationTableSeeder extends Seeder {

	public function run()
	{
		DB::table('notifications')->delete();

		for($i = 1; $i <= 6; $i++){

			Notification::create(array(
				'title'				=> "Notification 1",
				'notification'		=> 'This is a notification message',
				'user_id'			=> $i,
				'severity_id'		=> ($i%2)+1,
				'resources_type_id'	=> ($i%4)+1,
				'resource_id'		=> 1,
				'is_active'			=> 1,
				'created_at'	=> new DateTime,
				'updated_at'	=> new DateTime
			));

		}

	}
}