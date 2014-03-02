<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatementOfMonthlyIncomeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('statement_of_monthly_income', function(Blueprint $table) {
			$table->increments('id');
			$table->float('applicant_gross_income');
			$table->float('spouse_gross_income');
			$table->float('other_income');
			$table->float('total_gross_income');
			$table->float('business_exp');
			$table->float('total_exp');
			$table->float('net_income');
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
		Schema::drop('statement_of_monthly_income');
	}

}
