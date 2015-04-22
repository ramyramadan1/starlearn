<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeriodEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('period_entries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('month_date')->nullable();
			$table->integer('batch_id')->nullable();
			$table->integer('subject_id')->nullable();
			$table->integer('class_timing_id')->nullable();
			$table->integer('employee_id')->nullable();
			$table->index(['month_date','batch_id'], 'index_period_entries_on_month_date_and_batch_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('period_entries');
	}

}
