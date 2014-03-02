<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('business', function(Blueprint $table) {
			$table->increments('id');
			$table->string('business_name');
			$table->string('nature_of_business');
			$table->date('yr_of_operation');
			$table->integer('contact_nos');
			$table->string('business_permit_nos');
			$table->string('business_add');
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
		Schema::drop('business');
	}

}
