<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalExamScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('additional_exam_scores', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('student_id')->nullable();
			$table->integer('additional_exam_id')->nullable();
			$table->decimal('marks', 7)->nullable();
			$table->integer('grading_level_id')->nullable();
			$table->string('remarks')->nullable();
			$table->boolean('is_failed')->nullable();
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
		Schema::drop('additional_exam_scores');
	}

}
