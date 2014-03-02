<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmploymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employment', function(Blueprint $table) {
			$table->increments('id');
			$table->string('present_employer');
			$table->string('address');
			$table->integer('salaryPerMonth');
			$table->string('position');
			$table->mediumInteger('service_length');
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
		Schema::drop('employment');
	}

}
