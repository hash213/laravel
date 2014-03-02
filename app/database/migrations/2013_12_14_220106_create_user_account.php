<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserAccount extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('user_accounts', function($table){
			$table->increments('user_id');
			$table->string('fname',50);
			$table->string('mname',50);
			$table->string('lname',50);
			$table->text('address');
			$table->string('username');
			$table->string('password',60);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('user_accounts');
	}

}