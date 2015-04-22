<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookMovementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_movements', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->integer('book_id')->nullable();
			$table->date('issue_date')->nullable();
			$table->date('due_date')->nullable();
			$table->string('status')->nullable();
			$table->timestamps();
			$table->integer('school_id')->nullable()->index('index_book_movements_on_school_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_movements');
	}

}
