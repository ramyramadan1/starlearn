<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username')->nullable()->index('index_users_on_username');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('name');
			$table->string('remember_token');
			$table->string('email')->nullable();
			$table->boolean('admin')->nullable();
			$table->boolean('student')->nullable();
			$table->boolean('employee')->nullable();
			$table->string('password')->nullable();
			$table->string('salt')->nullable();
			$table->string('reset_password_code')->nullable();
			$table->dateTime('reset_password_code_until')->nullable();
			$table->timestamps();
			$table->boolean('parent')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
