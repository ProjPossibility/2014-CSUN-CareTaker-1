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
			$table->string('image_name');
			$table->softDeletes();
			$table->timestamps();
		});

		/* Add med-list contraints */
		Schema::table('medications', function($t) {
        	$t->integer('medlist_id')->unsigned()->nullable();
        	$t->foreign('medlist_id')->references('id')->on('medication_list');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{	
		/* Remove med-list contraints */
		Schema::table('medications', function($t) {
        	$t->dropForeign('medications_medlist_id_foreign');
        	$t->dropColumn('medlist_id');
        });

		Schema::drop('medication_list');
	}

}
