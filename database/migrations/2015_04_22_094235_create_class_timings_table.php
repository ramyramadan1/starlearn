<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassTimingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('class_timings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('batch_id')->nullable();
			$table->string('name')->nullable();
			$table->time('start_time')->nullable();
			$table->time('end_time')->nullable();
			$table->boolean('is_break')->nullable();
			$table->boolean('is_deleted')->nullable()->default(0);
			$table->index(['batch_id','start_time','end_time'], 'index_class_timings_on_batch_id_and_start_time_and_end_time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('class_timings');
	}

}
