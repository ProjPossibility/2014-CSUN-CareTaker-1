<?php

class AppointmentTableSeeder extends Seeder {

    public function run()
    {   
        DB::table('appointments')->delete();
        
        $date1 = new DateTime();
        $date2 = new DateTime();
        $date3 = new DateTime();

        $date1->modify("+1 day");
        $date2->modify("+2 day");
        $date3->modify("+10 day");

        Appointment::create(array(
        	'user_id'			=> 1,
            'name'             	=> 'Doctors Appointment',
            'location'        	=> 'UCLA Medical Center',
            'appointment_datetime' => $date1,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
        	'user_id'			=> 1,
            'name'             	=> 'Pick up grandchildren',
            'location'        	=> 'Wilbur Elementary School',
            'appointment_datetime' => $date2,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
        	'user_id'			=> 1,
            'name'             	=> 'Haircut',
            'location'        	=> 'Beauty salon',
            'appointment_datetime' => $date3,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 2,
            'name'              => 'Dentist appointment',
            'location'          => 'All Family Dental Care',  
            'appointment_datetime' => $date3,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 3,
            'name'              => 'Pick up Dr Pepper',
            'appointment_datetime' => $date1,
            'location'          => 'Ralphs',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 4,
            'name'              => 'Rock climbing',
            'location'          => 'Top Out Climbing Center',
            'appointment_datetime' => $date2,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 5,
            'name'              => 'Study session',
            'location'          => 'CSUN Oviatt Library',
            'appointment_datetime' => $date3,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 6,
            'name'              => 'Mentor students',
            'appointment_datetime' => $date1,
            'location'          => 'CSUN',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 7,
            'name'              => 'Dr. Appointment',
            'appointment_datetime' => $date1,
            'location'          => 'Kaiser',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        Appointment::create(array(
            'user_id'           => 7,
            'name'              => 'Hearing Appointment',
            'appointment_datetime' => $date3,
            'location'          => 'HearX',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));
    }
}