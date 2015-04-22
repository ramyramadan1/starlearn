<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimetablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timetables', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
			$table->boolean('is_active')->nullable()->default(0);
			$table->timestamps();
			$table->index(['start_date','end_date'], 'by_start_and_end');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('timetables');
	}

}
