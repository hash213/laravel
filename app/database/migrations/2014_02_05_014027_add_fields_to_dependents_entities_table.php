<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFieldsToDependentsEntitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dependents_entities', function(Blueprint $table) {
			$table->string('name2')->nullable();
			$table->string('level2')->nullable();
			$table->string('school_attended2')->nullable();
			$table->string('name3')->nullable();
			$table->string('level3')->nullable();
			$table->string('school_attended3')->nullable();
			$table->string('name4')->nullable();
			$table->string('level4')->nullable();
			$table->string('school_attended4')->nullable();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dependents_entities', function(Blueprint $table) {
			
		});
	}

}
