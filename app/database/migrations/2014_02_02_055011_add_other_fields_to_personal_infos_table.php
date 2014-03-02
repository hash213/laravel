<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddOtherFieldsToPersonalInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personal_infos', function(Blueprint $table) {
			$table->string('spouseName')->nullable();
			$table->string('spousePresentEmp')->nullable();
			$table->string('spouseEmpAddress')->nullable();
			$table->string('spouseMonthlySalary')->nullable();
			$table->string('spousePosition')->nullable();
			$table->string('spouseLenOfService')->nullable();
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
