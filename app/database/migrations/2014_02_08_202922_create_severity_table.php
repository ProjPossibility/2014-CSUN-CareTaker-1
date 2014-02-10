<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeverityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('severities', function($table) {
            $table->increments('id');
		   	$table->string('title');
		    $table->softDeletes();
		    $table->timestamps();
        });

		/* Add notification contraints */
		Schema::table('notifications', function($t) {
        	$t->integer('severity_id')->unsigned();
		    $t->foreign('severity_id')->references('id')->on('severities');
        });


        	   	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/* Remove notification contraints */
		Schema::table('notifications', function($t) {
        	$t->dropForeign('notifications_severity_id_foreign');
        	$t->dropColumn('severity_id');
        });

		Schema::drop('severities');
	}

}
