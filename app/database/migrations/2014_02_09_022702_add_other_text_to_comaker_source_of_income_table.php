<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddOtherTextToComakerSourceOfIncomeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comaker_source_of_income', function(Blueprint $table) {
			$table->string('other_text')->after('other');
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
