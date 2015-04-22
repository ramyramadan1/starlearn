<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fa_groups', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->text('desc', 65535)->nullable();
			$table->integer('cce_exam_category_id')->nullable();
			$table->timestamps();
			$table->integer('cce_grade_set_id')->nullable();
			$table->float('max_marks', 10, 0)->nullable()->default(100);
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
		Schema::drop('fa_groups');
	}

}
