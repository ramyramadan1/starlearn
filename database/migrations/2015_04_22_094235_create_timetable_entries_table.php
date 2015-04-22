<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimetableEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timetable_entries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('batch_id')->nullable();
			$table->integer('weekday_id')->nullable();
			$table->integer('class_timing_id')->nullable();
			$table->integer('subject_id')->nullable();
			$table->integer('employee_id')->nullable();
			$table->integer('timetable_id')->nullable()->index('index_timetable_entries_on_timetable_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('timetable_entries');
	}

}
