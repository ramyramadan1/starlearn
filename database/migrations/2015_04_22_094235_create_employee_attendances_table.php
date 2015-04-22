<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeAttendancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_attendances', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('attendance_date')->nullable();
			$table->integer('employee_id')->nullable();
			$table->integer('employee_leave_type_id')->nullable();
			$table->string('reason')->nullable();
			$table->boolean('is_half_day')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employee_attendances');
	}

}
