<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendances', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('student_id')->nullable();
			$table->integer('period_table_entry_id')->nullable();
			$table->boolean('forenoon')->nullable()->default(0);
			$table->boolean('afternoon')->nullable()->default(0);
			$table->string('reason')->nullable();
			$table->date('month_date')->nullable();
			$table->integer('batch_id')->nullable();
			$table->index(['month_date','batch_id'], 'index_attendances_on_month_date_and_batch_id');
			$table->index(['student_id','batch_id'], 'index_attendances_on_student_id_and_batch_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attendances');
	}

}
