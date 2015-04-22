<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupedExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grouped_exams', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('exam_group_id')->nullable();
			$table->integer('batch_id')->nullable()->index('index_grouped_exams_on_batch_id');
			$table->decimal('weightage', 15)->nullable();
			$table->index(['batch_id','exam_group_id'], 'index_grouped_exams_on_batch_id_and_exam_group_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grouped_exams');
	}

}
