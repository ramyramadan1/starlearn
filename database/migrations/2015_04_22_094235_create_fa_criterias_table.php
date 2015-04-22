<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaCriteriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fa_criterias', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('fa_name')->nullable();
			$table->string('desc')->nullable();
			$table->integer('fa_group_id')->nullable()->index('index_fa_criterias_on_fa_group_id');
			$table->timestamps();
			$table->integer('sort_order')->nullable();
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
		Schema::drop('fa_criterias');
	}

}
