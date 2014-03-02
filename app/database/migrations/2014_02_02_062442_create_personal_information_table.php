<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_information', function(Blueprint $table) {
			$table->increments('id');
			$table->string('fname');
			$table->string('mname');
			$table->string('lname');
			$table->string('bday');
			$table->string('bplace');
			$table->string('present_address');
			$table->string('contact_nos');
			$table->string('civil_status');
			$table->string('loan_class');

			$table->boolean('src_income_shares');
			$table->boolean('src_income_rentals');
			$table->boolean('src_income_commission');
			$table->boolean('src_income_allotment');
			$table->boolean('src_income_employment');
			$table->boolean('src_income_business');
			$table->boolean('src_income_operator');
			$table->boolean('src_income_farming');
			//if the applicant is employed
			$table->string('presentEmp')->nullable();
			$table->string('empAddress')->nullable();
			$table->string('monthlySalary')->nullable();
			$table->string('position')->nullable();
			$table->string('lenOfService')->nullable();
			//if applicant spouse is employed.
			$table->string('spouseName')->nullable();
			$table->string('spousePresentEmp')->nullable();
			$table->string('spouseEmpAddress')->nullable();
			$table->string('spouseMonthlySalary')->nullable();
			$table->string('spousePosition')->nullable();
			$table->string('spouseLenOfService')->nullable();
			//desired loan amount
			$table->string('desiredAmount');
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
		Schema::drop('personal_information');
	}

}
