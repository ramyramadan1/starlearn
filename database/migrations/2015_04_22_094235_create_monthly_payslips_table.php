<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMonthlyPayslipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monthly_payslips', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('salary_date')->nullable();
			$table->integer('employee_id')->nullable();
			$table->integer('payroll_category_id')->nullable();
			$table->string('amount')->nullable();
			$table->boolean('is_approved')->default(0);
			$table->integer('approver_id')->nullable();
			$table->boolean('is_rejected')->default(0);
			$table->integer('rejector_id')->nullable();
			$table->string('reason')->nullable();
			$table->string('remark')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('monthly_payslips');
	}

}
