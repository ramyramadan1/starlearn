<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupedBatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grouped_batches', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('batch_group_id')->nullable()->index('index_grouped_batches_on_batch_group_id');
			$table->integer('batch_id')->nullable();
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
		Schema::drop('grouped_batches');
	}

}
