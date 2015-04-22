<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRankingLevelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ranking_levels', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->decimal('gpa', 15)->nullable();
			$table->decimal('marks', 15)->nullable();
			$table->integer('subject_count')->nullable();
			$table->integer('priority')->nullable();
			$table->timestamps();
			$table->boolean('full_course')->nullable()->default(0);
			$table->integer('course_id')->nullable();
			$table->string('subject_limit_type')->nullable();
			$table->string('marks_limit_type')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ranking_levels');
	}

}
