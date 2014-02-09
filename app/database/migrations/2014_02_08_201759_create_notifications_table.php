<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifications', function($table) {
            $table->increments('id');
		   	$table->string('title');
		   	$table->string('notification');	
		   	$table->integer('user_id')->unsigned();	
		   	$table->foreign('user_id')->references('id')->on('users');
		   	$table->integer('severity_id')->unsigned();
			$table->integer('resources_type_id')->unsigned();
			$table->integer('resource_id')->unsigned();
		    $table->boolean('is_active')->default(1);
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
		Schema::drop('notifications');
	}

}
