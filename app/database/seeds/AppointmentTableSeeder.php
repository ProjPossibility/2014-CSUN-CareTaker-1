<?php

class AppointmentTableSeeder extends Seeder {

    public function run()
    {   
        DB::table('appointments')->delete();

        Appointment::create(array(
        	'user_id'			=> 1,
            'name'             	=> 'Doctors Appointment',
            'location'        	=> 'UCLA Medical Center',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
        	'user_id'			=> 1,
            'name'             	=> 'Pick up grandchildren',
            'location'        	=> 'Wilbur Elementary School',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
        	'user_id'			=> 1,
            'name'             	=> 'Make dinner',
            'location'        	=> 'Kitchen',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

    }
}