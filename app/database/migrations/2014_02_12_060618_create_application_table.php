<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('application', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('personal_information_id');
			$table->integer('bank_id');
			$table->integer('business_id');
			$table->integer('appliance_id');
			$table->integer('dependent_entities_id');
			$table->integer('spouse_employment_id');
			$table->integer('statement_of_monthly_income_id');
			$table->integer('real_properties_id');
			$table->integer('vehicle_id');
			$table->integer('comaker_id');
			$table->integer('comaker_employment_id');
			$table->integer('comaker_monthly_income_statement_id');
			$table->integer('comaker_source_of_income_id');
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
		Schema::drop('application');
	}

}
