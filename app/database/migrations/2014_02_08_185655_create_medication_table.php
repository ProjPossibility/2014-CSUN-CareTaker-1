<?php

use Illuminate\Database\Migrations\Migration;

class CreateMedicationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('medications', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
     	    $table->string('dosage');
            $table->string('requirements');
            $table->string('notes');
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
		Schema::drop('medications');
	}

}