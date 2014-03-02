<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollateralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collateral', function(Blueprint $table) {
			$table->increments('id');
			$table->string('appliance_name');
			$table->string('serial_nos');
			$table->string('appliance_name1');
			$table->string('serial_nos1');
			$table->string('appliance_name2');
			$table->string('serial_nos2');
			$table->string('appliance_name3');
			$table->string('serial_nos3');
			$table->string('bank_name');
			$table->string('account_name');
			$table->string('business_permit');
			$table->string('title_nos');
			$table->string('nos_of_sq');
			$table->string('area_location');
			$table->string('mark_type');
			$table->string('chassis_nos');
			$table->string('engine_nos');
			$table->string('business_name');
			$table->string('nature_of_business');
			$table->date('yr_of_operation');
			$table->integer('contact_nos');
			$table->string('business_permit_nos');
			$table->string('business_add');
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
		Schema::drop('collateral');
	}

}
