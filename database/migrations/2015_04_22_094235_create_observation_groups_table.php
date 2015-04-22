<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObservationGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('observation_groups', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->string('header_name')->nullable();
			$table->string('desc')->nullable();
			$table->string('cce_grade_set_id')->nullable();
			$table->timestamps();
			$table->string('observation_kind')->nullable();
			$table->float('max_marks', 10, 0)->nullable();
			$table->boolean('is_deleted')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('observation_groups');
	}

}
