<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
      $table->engine = 'MYISAM';
		$table->increments('id');
		$table->integer('user_id')->unsigned();
		$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->longtext('video_url');
      $table->longtext('video_description');
      $table->string('video_author');
      $table->string('video_name');
      $table->string('video_artist');
      $table->string('video_album');
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
		Schema::drop('videos');
	}

}
