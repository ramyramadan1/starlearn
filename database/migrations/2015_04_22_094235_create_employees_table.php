<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('employee_category_id')->nullable();
			$table->string('employee_number')->nullable()->index('index_employees_on_employee_number');
			$table->date('joining_date')->nullable();
			$table->string('first_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();
			$table->boolean('gender')->nullable();
			$table->string('job_title')->nullable();
			$table->integer('employee_position_id')->nullable();
			$table->integer('employee_department_id')->nullable();
			$table->integer('reporting_manager_id')->nullable();
			$table->integer('employee_grade_id')->nullable();
			$table->string('qualification')->nullable();
			$table->text('experience_detail', 65535)->nullable();
			$table->integer('experience_year')->nullable();
			$table->integer('experience_month')->nullable();
			$table->boolean('status')->nullable();
			$table->string('status_description')->nullable();
			$table->date('date_of_birth')->nullable();
			$table->string('marital_status')->nullable();
			$table->integer('children_count')->nullable();
			$table->string('father_name')->nullable();
			$table->string('mother_name')->nullable();
			$table->string('husband_name')->nullable();
			$table->string('blood_group')->nullable();
			$table->integer('nationality_id')->nullable();
			$table->string('home_address_line1')->nullable();
			$table->string('home_address_line2')->nullable();
			$table->string('home_city')->nullable();
			$table->string('home_state')->nullable();
			$table->integer('home_country_id')->nullable();
			$table->string('home_pin_code')->nullable();
			$table->string('office_address_line1')->nullable();
			$table->string('office_address_line2')->nullable();
			$table->string('office_city')->nullable();
			$table->string('office_state')->nullable();
			$table->integer('office_country_id')->nullable();
			$table->string('office_pin_code')->nullable();
			$table->string('office_phone1')->nullable();
			$table->string('office_phone2')->nullable();
			$table->string('mobile_phone')->nullable();
			$table->string('home_phone')->nullable();
			$table->string('email')->nullable();
			$table->string('fax')->nullable();
			$table->string('photo_file_name')->nullable();
			$table->string('photo_content_type')->nullable();
			$table->binary('photo_data', 16777215)->nullable();
			$table->timestamps();
			$table->integer('photo_file_size')->nullable();
			$table->integer('user_id')->nullable();
			$table->string('library_card')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}
