<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComakerMonthlyIncomeStatementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comaker_monthly_income_statement', function(Blueprint $table) {
			$table->increments('id');
			$table->float('comaker_gross_income');
			$table->float('spouse_gross_income');
			$table->float('other_income');
			$table->float('total_gross_income');
			$table->float('less');
			$table->float('household_exp');
			$table->float('business_exp');
			$table->float('total_exp');
			$table->float('net_income');
			$table->integer('user_id');
			$table->integer('comaker_id');
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
		Schema::drop('comaker_monthly_income_statement');
	}

}
