<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinanceFeeParticularsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_fee_particulars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->text('description', 65535)->nullable();
			$table->decimal('amount', 15)->nullable();
			$table->integer('finance_fee_category_id')->nullable();
			$table->integer('student_category_id')->nullable();
			$table->string('admission_no')->nullable();
			$table->integer('student_id')->nullable();
			$table->boolean('is_deleted')->default(0);
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
		Schema::drop('finance_fee_particulars');
	}

}
