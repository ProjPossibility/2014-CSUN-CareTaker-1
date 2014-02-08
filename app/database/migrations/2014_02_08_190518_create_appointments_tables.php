<?php

use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointments', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
           	$table->string('name');
           	$table->string('location');
           	$table->string('appointment_datetime');
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('appointments');
	}

}