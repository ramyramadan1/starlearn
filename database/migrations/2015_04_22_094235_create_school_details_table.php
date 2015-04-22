<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('school_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('school_id')->nullable();
			$table->string('logo_file_name')->nullable();
			$table->string('logo_content_type')->nullable();
			$table->string('logo_file_size')->nullable();
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
		Schema::drop('school_details');
	}

}
