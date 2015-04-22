<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinanceTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_transactions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->decimal('amount', 15)->nullable();
			$table->boolean('fine_included')->nullable()->default(0);
			$table->integer('category_id')->nullable();
			$table->integer('student_id')->nullable();
			$table->integer('finance_fees_id')->nullable();
			$table->timestamps();
			$table->date('transaction_date')->nullable();
			$table->decimal('fine_amount', 10)->nullable()->default(0.00);
			$table->integer('master_transaction_id')->nullable()->default(0);
			$table->integer('finance_id')->nullable();
			$table->string('finance_type')->nullable();
			$table->integer('payee_id')->nullable();
			$table->string('payee_type')->nullable();
			$table->string('receipt_no')->nullable();
			$table->string('voucher_no')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('finance_transactions');
	}

}
