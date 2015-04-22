<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinanceTransactionTriggersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_transaction_triggers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('finance_category_id')->nullable();
			$table->decimal('percentage')->nullable();
			$table->string('title')->nullable();
			$table->string('description')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('finance_transaction_triggers');
	}

}
