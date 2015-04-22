<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subjects', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->string('code')->nullable();
			$table->integer('batch_id')->nullable();
			$table->boolean('no_exams')->nullable()->default(0);
			$table->integer('max_weekly_classes')->nullable();
			$table->integer('elective_group_id')->nullable();
			$table->boolean('is_deleted')->nullable()->default(0);
			$table->timestamps();
			$table->decimal('credit_hours', 15)->nullable();
			$table->boolean('prefer_consecutive')->nullable()->default(0);
			$table->decimal('amount', 15)->nullable();
			$table->index(['batch_id','elective_group_id','is_deleted'], 'index_subjects_on_batch_id_and_elective_group_id_and_is_deleted');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subjects');
	}

}
