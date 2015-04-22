<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinanceFeeStructureElementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_fee_structure_elements', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->decimal('amount', 15)->nullable();
			$table->string('label')->nullable();
			$table->integer('batch_id')->nullable();
			$table->integer('student_category_id')->nullable();
			$table->integer('student_id')->nullable();
			$table->integer('parent_id')->nullable();
			$table->integer('fee_collection_id')->nullable();
			$table->boolean('deleted')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('finance_fee_structure_elements');
	}

}
