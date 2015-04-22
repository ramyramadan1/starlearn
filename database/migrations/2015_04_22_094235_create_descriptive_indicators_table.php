<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDescriptiveIndicatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('descriptive_indicators', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->string('desc')->nullable();
			$table->integer('describable_id')->nullable();
			$table->string('describable_type')->nullable();
			$table->timestamps();
			$table->integer('sort_order')->nullable();
			$table->index(['describable_id','describable_type','sort_order'], 'describable_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('descriptive_indicators');
	}

}
