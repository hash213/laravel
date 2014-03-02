<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientSrcOfIncomeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_src_of_income', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('shares');
			$table->boolean('rentals');
			$table->boolean('commission');
			$table->boolean('allotment');
			$table->boolean('employment');
			$table->boolean('business');
			$table->boolean('motorVehicleOperator');
			$table->boolean('farming');
			$table->boolean('user_id');
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
		Schema::drop('client_src_of_income');
	}

}
