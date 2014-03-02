<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoanReleasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loan_releases', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('checkVoucher');
			$table->boolean('releaseStmnt');
			$table->boolean('schedOfAmortization');
			$table->boolean('applicationForm');
			$table->boolean('coverSheet');
			$table->boolean('creditInvestigationReport');
			$table->boolean('appraisalReport');
			$table->boolean('cashFlowAnalysis');
			$table->boolean('promisoryNote');
			$table->boolean('chattelMortgage');
			$table->boolean('realEstateMortgage');
			$table->boolean('securityAgreement');
			$table->boolean('voluntaryOfferToSurrender');
			$table->boolean('insuranceForm');
			$table->boolean('otherRequirements');
			$table->boolean('accountLedger');
			$table->integer('personal_information_id');
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
		Schema::drop('loan_releases');
	}

}
