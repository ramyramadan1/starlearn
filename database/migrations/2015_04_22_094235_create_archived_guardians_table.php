<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArchivedGuardiansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('archived_guardians', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('ward_id')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('relation')->nullable();
			$table->string('email')->nullable();
			$table->string('office_phone1')->nullable();
			$table->string('office_phone2')->nullable();
			$table->string('mobile_phone')->nullable();
			$table->string('office_address_line1')->nullable();
			$table->string('office_address_line2')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->integer('country_id')->nullable();
			$table->date('dob')->nullable();
			$table->string('occupation')->nullable();
			$table->string('income')->nullable();
			$table->string('education')->nullable();
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
		Schema::drop('archived_guardians');
	}

}
