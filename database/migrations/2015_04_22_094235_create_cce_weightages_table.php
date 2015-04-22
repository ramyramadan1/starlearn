<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCceWeightagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cce_weightages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('weightage')->nullable();
			$table->string('criteria_type')->nullable();
			$table->integer('cce_exam_category_id')->nullable();
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
		Schema::drop('cce_weightages');
	}

}
