<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsAndAssignments extends Migration {
 
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lessons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->string('slug')->default('');
			$table->timestamps();
		});
 
		Schema::create('assignments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('lesson_id')->unsigned()->default(0);
			$table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
			$table->string('name')->default('');
			$table->string('slug')->default('');
			$table->boolean('completed')->default(false);
			$table->text('description')->default('');
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
		Schema::drop('assignments');
		Schema::drop('lessons');
	}
 
}