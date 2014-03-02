<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComakerSourceOfIncomeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comaker_source_of_income', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('business');
			$table->boolean('employment');
			$table->string('other');
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
		Schema::drop('comaker_source_of_income');
	}

}
