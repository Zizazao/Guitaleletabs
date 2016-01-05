<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function($table)
    {
		$table->increments('id');
		
		$table->integer('user_id')->unsigned();
		$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		$table->morphs('votable');
		$table->unique(array('user_id', 'votable_id', 'votable_type'));  
		$table->integer('vote');
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
		Schema::drop('votes');
	}

}
