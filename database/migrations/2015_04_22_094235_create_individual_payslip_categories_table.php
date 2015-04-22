<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndividualPayslipCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('individual_payslip_categories', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('employee_id')->nullable();
			$table->date('salary_date')->nullable();
			$table->string('name')->nullable();
			$table->string('amount')->nullable();
			$table->boolean('is_deduction')->nullable();
			$table->boolean('include_every_month')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('individual_payslip_categories');
	}

}
