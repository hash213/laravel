<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddLessAndHouseholdToStatementOfMonthlyIncomeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('statement_of_monthly_income', function(Blueprint $table) {
			$table->float('less')->after('total_gross_income');
			$table->float('household_exp')->after('less');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('statement_of_monthly_income', function(Blueprint $table) {
			
		});
	}

}
