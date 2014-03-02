<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequirementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requirements', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Id_picture');
			$table->string('valid_id_photocopy');
			$table->string('photocopy_CTC');
			$table->string('proof_of_billing');
			$table->string('Collateral_photo');
			$table->string('Pay_slip');
			$table->string('COE');
			$table->string('business_permit');
			$table->string('DTI');
			$table->string('Store_photo');
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
		Schema::drop('requirements');
	}

}
