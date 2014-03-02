<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComakerEmploymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comaker_employments', function(Blueprint $table) {
			$table->increments('id');
			$table->string('comaker_employer');
			$table->string('address');
			$table->float('salaryPerMonth');
			$table->string('position');
			$table->mediumInteger('len_of_service');
			$table->integer('user_id');
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
		Schema::drop('comaker_employments');
	}

}
