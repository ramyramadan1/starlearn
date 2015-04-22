<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectLeavesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subject_leaves', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('student_id')->nullable();
			$table->date('month_date')->nullable();
			$table->integer('subject_id')->nullable();
			$table->integer('employee_id')->nullable();
			$table->integer('class_timing_id')->nullable();
			$table->string('reason')->nullable();
			$table->timestamps();
			$table->integer('batch_id')->nullable();
			$table->index(['month_date','subject_id','batch_id'], 'index_subject_leaves_on_month_date_and_subject_id_and_batch_id');
			$table->index(['student_id','batch_id'], 'index_subject_leaves_on_student_id_and_batch_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subject_leaves');
	}

}
