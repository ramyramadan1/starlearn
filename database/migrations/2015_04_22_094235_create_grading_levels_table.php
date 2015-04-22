<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradingLevelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grading_levels', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->integer('batch_id')->nullable();
			$table->integer('min_score')->nullable();
			$table->integer('order')->nullable();
			$table->boolean('is_deleted')->nullable()->default(0);
			$table->timestamps();
			$table->decimal('credit_points', 15)->nullable();
			$table->string('description')->nullable();
			$table->index(['batch_id','is_deleted'], 'index_grading_levels_on_batch_id_and_is_deleted');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grading_levels');
	}

}
