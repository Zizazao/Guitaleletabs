<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model {

	protected $fillable = ['votable_id', 'votable_type', 'vote', 'user_id'];
	
	public function votable()
	{
		return $this->morphTo();
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}

