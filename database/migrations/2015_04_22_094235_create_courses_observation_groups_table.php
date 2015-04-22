<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesObservationGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses_observation_groups', function(Blueprint $table)
		{
			$table->integer('course_id')->nullable()->index('index_courses_observation_groups_on_course_id');
			$table->integer('observation_group_id')->nullable()->index('index_courses_observation_groups_on_observation_group_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses_observation_groups');
	}

}
