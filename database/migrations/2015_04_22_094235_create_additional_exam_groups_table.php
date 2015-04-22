<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalExamGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('additional_exam_groups', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->integer('batch_id')->nullable();
			$table->string('exam_type')->nullable();
			$table->boolean('is_published')->nullable()->default(0);
			$table->boolean('result_published')->nullable()->default(0);
			$table->string('students_list')->nullable();
			$table->date('exam_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('additional_exam_groups');
	}

}
