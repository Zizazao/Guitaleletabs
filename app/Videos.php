<?php namespace App;

use Illuminate\Database\Eloquent\Model;

	class Videos extends Model {

		protected $fillable = ['video_url', 'user_id', 'video_description', 'video_author',
		'video_name','video_artist', 'video_album'];
		
		
		public function user()
		{
			return $this->belongsTo('App\User');
		}
	  
		public function votes()
		{
			return $this->morphMany('App\Vote', 'votable');
		}

	}
