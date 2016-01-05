<?php namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Song_data extends Model {
  
		protected $fillable = ['song', 'artist', 'album', 'difficulty','view', 'user_id'];	
	
		public function user()
		{
			return $this->belongsTo('App\User');
		}
    
		public function votes()
		{
			return $this->morphMany('App\Vote', 'votable');
		}

	}
  
  
  