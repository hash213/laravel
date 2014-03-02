<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFieldToAppliancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('appliances', function(Blueprint $table) {
			$table->string('appliance_name1');
			$table->string('serial_nos1');
			$table->string('appliance_name2');
			$table->string('serial_nos2');
			$table->string('appliance_name3');
			$table->string('serial_nos3');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('appliances', function(Blueprint $table) {
			
		});
	}

}
