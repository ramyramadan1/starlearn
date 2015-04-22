<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineMeetingRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('online_meeting_rooms', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('server_id')->nullable()->index('index_online_meeting_rooms_on_server_id');
			$table->integer('user_id')->nullable();
			$table->string('meetingid')->nullable()->unique('index_online_meeting_rooms_on_meetingid');
			$table->string('name')->nullable();
			$table->string('attendee_password')->nullable();
			$table->string('moderator_password')->nullable();
			$table->string('welcome_msg')->nullable();
			$table->string('logout_url')->nullable();
			$table->string('voice_bridge')->nullable()->unique('index_online_meeting_rooms_on_voice_bridge');
			$table->string('dial_number')->nullable();
			$table->integer('max_participants')->nullable();
			$table->boolean('private')->nullable()->default(0);
			$table->boolean('randomize_meetingid')->nullable()->default(1);
			$table->boolean('external')->nullable()->default(0);
			$table->string('param')->nullable();
			$table->dateTime('scheduled_on')->nullable();
			$table->boolean('is_active')->nullable()->default(1);
			$table->timestamps();
			$table->integer('school_id')->nullable()->index('index_online_meeting_rooms_on_school_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('online_meeting_rooms');
	}

}
