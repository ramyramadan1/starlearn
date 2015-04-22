<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinanceFeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_fees', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('fee_collection_id')->nullable();
			$table->string('transaction_id')->nullable();
			$table->integer('student_id')->nullable();
			$table->boolean('is_paid')->nullable()->default(0);
			$table->index(['fee_collection_id','student_id'], 'index_finance_fees_on_fee_collection_id_and_student_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('finance_fees');
	}

}
