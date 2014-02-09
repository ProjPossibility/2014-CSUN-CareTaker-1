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

        Appointment::create(array(
            'user_id'           => 2,
            'name'              => 'Dentist appointment',
            'location'          => 'All Family Dental Care',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 3,
            'name'              => 'Pick up Dr Pepper',
            'location'          => 'Ralphs',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 4,
            'name'              => 'Rock climbing',
            'location'          => 'Top Out Climbing Center',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 5,
            'name'              => 'Study session',
            'location'          => 'CSUN Oviatt Library',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 6,
            'name'              => 'Mentor students',
            'location'          => 'CSUN',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));
    }
}