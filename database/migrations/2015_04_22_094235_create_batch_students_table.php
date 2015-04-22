<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBatchStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batch_students', function(Blueprint $table)
		{
			$table->integer('student_id')->nullable();
			$table->integer('batch_id')->nullable();
			$table->index(['batch_id','student_id'], 'index_batch_students_on_batch_id_and_student_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batch_students');
	}

}
