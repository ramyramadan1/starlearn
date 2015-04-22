<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineMeetingServersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('online_meeting_servers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->string('url')->nullable();
			$table->string('salt')->nullable();
			$table->string('version')->nullable();
			$table->string('param')->nullable();
			$table->timestamps();
			$table->integer('school_id')->nullable()->index('index_online_meeting_servers_on_school_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('online_meeting_servers');
	}

}
