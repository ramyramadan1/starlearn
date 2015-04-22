<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeeDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fee_discounts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('type')->nullable();
			$table->string('name')->nullable();
			$table->integer('receiver_id')->nullable();
			$table->integer('finance_fee_category_id')->nullable();
			$table->decimal('discount', 15)->nullable();
			$table->boolean('is_amount')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fee_discounts');
	}

}
