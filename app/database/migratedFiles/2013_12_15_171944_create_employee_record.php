<?php

use Illuminate\Database\Migrations\Migration;

class CreateEmployeeRecord extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_record', function($record){
			$record->increments('id');
			$record->string('fname',50);
			$record->string('mname',50);
			$record->string('lname',50);
			$record->string('address',80);
			$record->string('idnum',50);
			$record->string('position',50);
			$record->integer('age',3);
			$record->string('password',50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employee_record');
	}

}