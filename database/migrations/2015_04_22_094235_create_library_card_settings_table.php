<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibraryCardSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('library_card_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('course_id')->nullable();
			$table->integer('student_category_id')->nullable();
			$table->integer('books_issueable')->nullable();
			$table->integer('time_period')->nullable()->default(30);
			$table->timestamps();
			$table->integer('school_id')->nullable()->index('index_library_card_settings_on_school_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('library_card_settings');
	}

}
