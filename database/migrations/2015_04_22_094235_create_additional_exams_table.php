<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('additional_exams', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('additional_exam_group_id')->nullable();
			$table->integer('subject_id')->nullable();
			$table->dateTime('start_time')->nullable();
			$table->dateTime('end_time')->nullable();
			$table->integer('maximum_marks')->nullable();
			$table->integer('minimum_marks')->nullable();
			$table->integer('grading_level_id')->nullable();
			$table->integer('weightage')->nullable()->default(0);
			$table->integer('event_id')->nullable();
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
		Schema::drop('additional_exams');
	}

}
