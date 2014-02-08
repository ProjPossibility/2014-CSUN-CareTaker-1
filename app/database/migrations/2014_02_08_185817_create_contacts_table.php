<?php

use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('contact_for_user_id')->unsigned();
     	    $table->integer('type_id')->unsigned();
     	    $table->integer('order_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('contact_for_user_id')->references('id')->on('users');
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
		Schema::drop('contacts');
	}

}