<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exam_groups', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->integer('batch_id')->nullable();
			$table->string('exam_type')->nullable();
			$table->boolean('is_published')->nullable()->default(0);
			$table->boolean('result_published')->nullable()->default(0);
			$table->date('exam_date')->nullable();
			$table->boolean('is_final_exam')->default(0);
			$table->integer('cce_exam_category_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exam_groups');
	}

}
