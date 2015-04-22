<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeeCollectionDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fee_collection_discounts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('type')->nullable();
			$table->string('name')->nullable();
			$table->integer('receiver_id')->nullable();
			$table->integer('finance_fee_collection_id')->nullable();
			$table->decimal('discount', 15)->nullable();
			$table->boolean('is_amount')->nullable()->default(0);
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
		Schema::drop('fee_collection_discounts');
	}

}
