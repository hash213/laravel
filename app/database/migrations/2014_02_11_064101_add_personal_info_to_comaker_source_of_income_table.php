<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPersonalInfoToComakerSourceOfIncomeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comaker_source_of_income', function(Blueprint $table) {
			$table->integer('personal_information_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comaker_source_of_income', function(Blueprint $table) {
			
		});
	}

}
