<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicationListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medication_list', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('dosage');
			$table->string('warnings', 999999);
			$table->string('uses', 999999);
			$table->string('side_effects', 999999);
			$table->string('precautions', 999999);
			$table->string('interactions', 999999);
			$table->string('overdose', 999999);
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
		Schema::drop('medication_list');
	}

}
