<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDelayedJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delayed_jobs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('priority')->nullable()->default(0);
			$table->integer('attempts')->nullable()->default(0);
			$table->text('handler', 65535)->nullable();
			$table->text('last_error', 65535)->nullable();
			$table->dateTime('run_at')->nullable();
			$table->dateTime('locked_at')->nullable();
			$table->dateTime('failed_at')->nullable();
			$table->string('locked_by')->nullable()->index('index_delayed_jobs_on_locked_by');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('delayed_jobs');
	}

}
