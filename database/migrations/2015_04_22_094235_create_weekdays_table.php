<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWeekdaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('weekdays', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('batch_id')->nullable()->index('index_weekdays_on_batch_id');
			$table->string('weekday')->nullable();
			$table->string('name')->nullable();
			$table->integer('sort_order')->nullable();
			$table->integer('day_of_week')->nullable();
			$table->boolean('is_deleted')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('weekdays');
	}

}
