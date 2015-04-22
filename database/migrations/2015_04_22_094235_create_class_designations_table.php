<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassDesignationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('class_designations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->decimal('cgpa', 15)->nullable();
			$table->timestamps();
			$table->decimal('marks', 15)->nullable();
			$table->integer('course_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('class_designations');
	}

}
