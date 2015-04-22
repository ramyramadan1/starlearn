<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaGroupsSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fa_groups_subjects', function(Blueprint $table)
		{
			$table->integer('subject_id')->nullable()->index('index_fa_groups_subjects_on_subject_id');
			$table->integer('fa_group_id')->nullable()->index('index_fa_groups_subjects_on_fa_group_id');
			$table->index(['fa_group_id','subject_id'], 'score_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fa_groups_subjects');
	}

}
