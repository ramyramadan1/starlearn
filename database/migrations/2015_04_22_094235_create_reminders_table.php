<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRemindersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reminders', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('sender')->nullable();
			$table->integer('recipient')->nullable()->index('index_reminders_on_recipient');
			$table->string('subject')->nullable();
			$table->text('body', 65535)->nullable();
			$table->boolean('is_read')->nullable()->default(0);
			$table->boolean('is_deleted_by_sender')->nullable()->default(0);
			$table->boolean('is_deleted_by_recipient')->nullable()->default(0);
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
		Schema::drop('reminders');
	}

}
