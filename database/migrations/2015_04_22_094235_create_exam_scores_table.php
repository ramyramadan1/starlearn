<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exam_scores', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('student_id')->nullable();
			$table->integer('exam_id')->nullable();
			$table->decimal('marks', 7)->nullable();
			$table->integer('grading_level_id')->nullable();
			$table->string('remarks')->nullable();
			$table->boolean('is_failed')->nullable();
			$table->timestamps();
			$table->index(['student_id','exam_id'], 'index_exam_scores_on_student_id_and_exam_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exam_scores');
	}

}
