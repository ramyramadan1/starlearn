<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('course_name')->nullable();
			$table->string('code')->nullable();
			$table->string('section_name')->nullable();
			$table->boolean('is_deleted')->nullable()->default(0);
			$table->timestamps();
			$table->string('grading_type')->nullable()->index('index_courses_on_grading_type');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
