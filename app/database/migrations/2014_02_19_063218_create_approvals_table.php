<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApprovalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('approvals', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('approvedAmount');
			$table->string('term');
			$table->integer('interset');
			$table->string('loanClass');
			$table->integer('serviceFee');
			$table->integer('MRI');
			$table->integer('RD_BRI_LTO');
			$table->integer('netAmount');
			$table->string('remarks');
			$table->date('paymentStart');
			$table->date('maturityDate');
			$table->string('approvedBy');
			$table->string('position');
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
		Schema::drop('approvals');
	}

}
