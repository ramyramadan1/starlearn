<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCceWeightagesCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cce_weightages_courses', function(Blueprint $table)
		{
			$table->integer('cce_weightage_id')->nullable()->index('index_cce_weightages_courses_on_cce_weightage_id');
			$table->integer('course_id')->nullable()->index('index_cce_weightages_courses_on_course_id');
			$table->index(['course_id','cce_weightage_id'], 'index_for_join_table_cce_weightage_courses');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cce_weightages_courses');
	}

}
