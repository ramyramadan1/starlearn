<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineMeetingMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('online_meeting_members', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('member_id')->nullable();
			$table->integer('online_meeting_room_id')->nullable();
			$table->timestamps();
			$table->integer('school_id')->nullable()->index('index_online_meeting_members_on_school_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('online_meeting_members');
	}

}
