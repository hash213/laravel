<?php

use Illuminate\Database\Migrations\Migration;

class DeductionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deductions', function(Blueprint $table) {
			$table->increments('id');
			$table->decimal('interest');
			$table->decimal('notarialFee');
			$table->decimal('docuStamp');
			$table->decimal('serviceCharge');
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
		Schema::drop('deductions');
	}

}