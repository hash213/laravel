<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComakerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comaker', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('civil_status');
			$table->integer('contact_nos');
			$table->string('address');
			$table->date('comaker_birthdate');
			$table->smallInteger('comaker_age');
			$table->string('comaker_bplace');
			$table->string('comaker_spouse');
			$table->date('spouse_birthdate');
			$table->smallInteger('spouse_age');
			$table->string('spouse_bplace');
			$table->string('business');
			$table->string('employment');
			$table->string('other');
			$table->string('other_text');
			$table->string('comaker_employer');
			$table->string('spouse_address');
			$table->string('salaryPerMonth');
			$table->string('position');
			$table->mediumInteger('len_of_service');
			$table->string('comaker_gross_income');
			$table->string('spouse_gross_income');
			$table->string('other_income');
			$table->string('total_gross_income');
			$table->string('less');
			$table->string('household_estring');
			$table->string('business_exp');
			$table->string('total_exp');
			$table->string('net_income');
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
		Schema::drop('comaker');
	}

}
