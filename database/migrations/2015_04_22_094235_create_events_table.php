<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->dateTime('start_date')->nullable();
			$table->dateTime('end_date')->nullable();
			$table->boolean('is_common')->nullable()->default(0);
			$table->boolean('is_holiday')->nullable()->default(0);
			$table->boolean('is_exam')->nullable()->default(0);
			$table->boolean('is_due')->nullable()->default(0);
			$table->timestamps();
			$table->integer('origin_id')->nullable();
			$table->string('origin_type')->nullable();
			$table->index(['is_common','is_holiday','is_exam'], 'index_events_on_is_common_and_is_holiday_and_is_exam');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
