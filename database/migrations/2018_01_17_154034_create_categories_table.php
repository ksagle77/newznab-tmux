<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('parentid')->nullable()->index('ix_categories_parentid');
			$table->integer('status')->default(1)->index('ix_categories_status');
			$table->string('description')->nullable();
			$table->boolean('disablepreview')->default(0);
			$table->bigInteger('minsizetoformrelease')->unsigned()->default(0);
			$table->bigInteger('maxsizetoformrelease')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
	}

}
