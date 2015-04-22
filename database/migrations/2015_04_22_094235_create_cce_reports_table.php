<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCceReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cce_reports', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('observable_id')->nullable();
			$table->string('observable_type')->nullable();
			$table->integer('student_id')->nullable();
			$table->integer('batch_id')->nullable();
			$table->string('grade_string')->nullable();
			$table->timestamps();
			$table->integer('exam_id')->nullable();
			$table->index(['observable_id','student_id','batch_id','exam_id','observable_type'], 'cce_report_join_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cce_reports');
	}

}
