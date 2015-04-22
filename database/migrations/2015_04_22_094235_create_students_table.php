<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('admission_no')->nullable()->index('index_students_on_admission_no');
			$table->string('class_roll_no')->nullable();
			$table->date('admission_date')->nullable();
			$table->string('first_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();
			$table->integer('batch_id')->nullable()->index('index_students_on_batch_id');
			$table->date('date_of_birth')->nullable();
			$table->string('gender')->nullable();
			$table->string('blood_group')->nullable();
			$table->string('birth_place')->nullable();
			$table->integer('nationality_id')->nullable();
			$table->string('language')->nullable();
			$table->string('religion')->nullable();
			$table->integer('student_category_id')->nullable();
			$table->string('address_line1')->nullable();
			$table->string('address_line2')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('pin_code')->nullable();
			$table->integer('country_id')->nullable();
			$table->string('phone1')->nullable();
			$table->string('phone2')->nullable();
			$table->string('email')->nullable();
			$table->integer('immediate_contact_id')->nullable();
			$table->boolean('is_sms_enabled')->nullable()->default(1);
			$table->string('photo_file_name')->nullable();
			$table->string('photo_content_type')->nullable();
			$table->binary('photo_data', 16777215)->nullable();
			$table->string('status_description')->nullable();
			$table->boolean('is_active')->nullable()->default(1);
			$table->boolean('is_deleted')->nullable()->default(0);
			$table->timestamps();
			$table->boolean('has_paid_fees')->nullable()->default(0);
			$table->integer('photo_file_size')->nullable();
			$table->integer('user_id')->nullable();
			$table->string('library_card')->nullable();
			$table->index(['first_name','middle_name','last_name'], 'index_students_on_first_name_and_middle_name_and_last_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
