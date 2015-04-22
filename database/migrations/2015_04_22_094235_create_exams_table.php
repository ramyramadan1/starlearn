<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exams', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('exam_group_id')->nullable();
			$table->integer('subject_id')->nullable();
			$table->dateTime('start_time')->nullable();
			$table->dateTime('end_time')->nullable();
			$table->decimal('maximum_marks', 10)->nullable();
			$table->decimal('minimum_marks', 10)->nullable();
			$table->integer('grading_level_id')->nullable();
			$table->integer('weightage')->nullable()->default(0);
			$table->integer('event_id')->nullable();
			$table->timestamps();
			$table->index(['exam_group_id','subject_id'], 'index_exams_on_exam_group_id_and_subject_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exams');
	}

}
