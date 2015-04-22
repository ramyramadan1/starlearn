<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssessmentScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assessment_scores', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('student_id')->nullable();
			$table->integer('grade_points')->nullable();
			$table->timestamps();
			$table->integer('exam_id')->nullable();
			$table->integer('batch_id')->nullable();
			$table->integer('descriptive_indicator_id')->nullable();
			$table->index(['student_id','batch_id','descriptive_indicator_id','exam_id'], 'score_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('assessment_scores');
	}

}
