<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaggingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taggings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tag_id')->nullable()->index('index_taggings_on_tag_id');
			$table->integer('taggable_id')->nullable();
			$table->string('taggable_type')->nullable();
			$table->dateTime('created_at')->nullable();
			$table->integer('school_id')->nullable()->index('index_taggings_on_school_id');
			$table->index(['taggable_id','taggable_type'], 'index_taggings_on_taggable_id_and_taggable_type');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('taggings');
	}

}
