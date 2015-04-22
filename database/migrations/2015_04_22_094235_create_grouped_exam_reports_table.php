<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupedExamReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grouped_exam_reports', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('batch_id')->nullable();
			$table->integer('student_id')->nullable();
			$table->integer('exam_group_id')->nullable();
			$table->decimal('marks', 15)->nullable();
			$table->string('score_type')->nullable();
			$table->integer('subject_id')->nullable();
			$table->timestamps();
			$table->index(['batch_id','student_id','score_type'], 'by_batch_student_and_score_type');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grouped_exam_reports');
	}

}
