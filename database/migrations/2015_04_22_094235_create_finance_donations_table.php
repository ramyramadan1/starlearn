<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinanceDonationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_donations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('donor')->nullable();
			$table->string('description')->nullable();
			$table->decimal('amount', 15)->nullable();
			$table->integer('transaction_id')->nullable();
			$table->timestamps();
			$table->date('transaction_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('finance_donations');
	}

}
