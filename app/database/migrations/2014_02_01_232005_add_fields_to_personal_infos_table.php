<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFieldsToPersonalInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personal_infos', function(Blueprint $table) {
			$table->boolean('src_income_shares')->nullable();
			$table->boolean('src_income_rentals')->nullable();
			$table->boolean('src_income_commission')->nullable();
			$table->boolean('src_income_allotment')->nullable();
			$table->boolean('src_income_employment')->nullable();
			$table->boolean('src_income_business')->nullable();
			$table->boolean('src_income_operator')->nullable();
			$table->boolean('src_income_farming')->nullable();
			//if the applicant is employed
			$table->string('presentEmp')->nullable();
			$table->string('empAddress')->nullable();
			$table->string('monthlySalary')->nullable();
			$table->string('position')->nullable();
			$table->string('lenOfService')->nullable();
			//desired loan amount
			$table->float('desiredAmount');
			$table->string('term');
			$table->text('loanPurpose');
			//statement of monthly income
			$table->string('appGrossIncome');
			$table->string('appSpouseGrossIncome');
			$table->string('otherIncome');
			$table->string('totalGrossIncome');
			$table->string('householdExp');
			$table->string('businessExp');
			$table->string('totalExp');
			$table->string('netIncome');



		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personal_infos', function(Blueprint $table) {
			
		});
	}

}
