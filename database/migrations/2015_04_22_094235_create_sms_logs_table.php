<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmsLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sms_logs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('mobile')->nullable();
			$table->string('gateway_response')->nullable();
			$table->string('sms_message_id')->nullable();
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
		Schema::drop('sms_logs');
	}

}
