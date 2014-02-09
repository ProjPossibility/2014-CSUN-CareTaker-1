<?php

class SeverityTableSeeder extends Seeder {

	public function run()
	{
		DB::table('severities')->delete();

		Severity::create(array(
			'id'		=> 1,
			'title'		=> "Suggestion",
		));

		Severity::create(array(
			'id'		=> 2,
			'title'		=> "Warning",
		));
	}
}