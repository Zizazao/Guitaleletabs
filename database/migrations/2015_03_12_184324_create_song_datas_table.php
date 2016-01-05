<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongDatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('song_datas', function(Blueprint $table)
		{
			$table->engine = 'MYISAM';
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('song');
			$table->string('artist');
			$table->string('album');
			$table->string('difficulty');
			$table->longtext('view');
			$table->timestamps();
			
		});
    \DB::statement('ALTER TABLE song_datas ADD FULLTEXT(song, artist, album)');
    
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('song_datas');
	}

}