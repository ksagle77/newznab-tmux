<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReleaseNfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('release_nfos', function(Blueprint $table)
		{
			$table->integer('releases_id')->unsigned()->primary()->comment('FK to releases.id');
			$table->binary('nfo', 65535)->nullable();
            $table->foreign('releases_id', 'FK_rn_releases')->references('id')->on('releases')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('release_nfos');
	}

}
