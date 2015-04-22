<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title')->nullable();
			$table->string('author')->nullable();
			$table->string('book_number')->nullable();
			$table->integer('book_movement_id')->nullable();
			$table->string('status')->nullable()->default('available');
			$table->timestamps();
			$table->integer('school_id')->nullable()->index('index_books_on_school_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}
