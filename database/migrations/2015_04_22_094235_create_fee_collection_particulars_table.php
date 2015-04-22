<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeeCollectionParticularsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fee_collection_particulars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->text('description', 65535)->nullable();
			$table->decimal('amount', 12)->nullable();
			$table->integer('finance_fee_collection_id')->nullable();
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
		Schema::drop('fee_collection_particulars');
	}

}
