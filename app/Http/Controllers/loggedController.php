<?php namespace App\Http\Controllers;

use Request;
use save;
use \App\Song_data;
use \App\Videos;
use \App\Vote;


class loggedController extends Controller {


   
  
  public function getTab()
  {
    $title1= 'Add';
    $title = 'Tabs';
    $url = \URL::action('loggedController@saveTab');
    return view('addTab')->with('url', $url)->with('title1', $title1)->with('title', $title);
  
  }
  
  public function saveTab()
  {

    $title1= 'Tab';
    $title= 'Saved';
  
    $s = new Song_data;
    $s->Song = \Input::get('song');
    $s->Artist = \Input::get('artist');
    $s->Album = \Input::get('album');
    $s->Difficulty = \Input::get('difficulty');
    $s->View = \Input::get('view');
    $s->user()->associate(\Auth::user()); // belongsTo
    $s->save();   
    
    return view('song_saved')->with('title1', $title1)->with('title', $title);
    
    
  }
  
  
  
  public function getVideo()
  {
    $url = \URL::action('loggedController@saveVideo');
    
    $title1 = 'Add';
    $title= 'Video';
    
    return view('addVideo')->with('url', $url)->with('title1', $title1)->with('title', $title);
  
  }
  
  
  
  public function saveVideo()
  {
    $title1= 'Video';
    $title= 'Saved';
    
    
    $v = new Videos;
    $v->video_url= \Input::get('video_url');
    $v->video_author= \Input::get('video_author');
    $v->video_name= \Input::get('video_name');
    $v->video_artist= \Input::get('video_artist');
    $v->video_album= \Input::get('video_album');
	$v->video_description= \Input::get('video_description');
	$v->user()->associate(\Auth::user()); // belongsTo
    $v->save();
    

    
    return view('video_saved')->with('title1', $title1)->with('title', $title);
  }
  
  public function getUserTabs() 
  {
    $title1 = 'Your';
    $title = 'Account';
    
    $UserTabs = \Auth::user()->Song_datas; 
    
    return view('UserAccount')->with('UserTabs', $UserTabs)->with('title1', $title1)->with('title', $title);
  
  }
  
  public function getUserVideos() 
  {
    $title1 = 'Your';
    $title = 'Account';
	
	$UserId = \Auth::user()->id;
	
    
    $Videos = Videos::where('user_id', $UserId)->get(); 


    return view('UserVideos')->with('Videos', $Videos)->with('title1', $title1)->with('title', $title);
  }
  
  public function editUserVideo($id) //terminar
  {
	$title1 ='Editing';
	$title ='Video';
	$video = Videos::findOrFail($id);
	
	return view('editVideo')->with('video', $video)->with('title1', $title1)->with('title', $title);
  
  }
  
  public function deleteVideos($id)
  {
    $title1 = 'Video';
    $title = 'Deleted';
    
    $t = Videos::findOrFail($id);
    $t->delete();
    
    return view('videoDeleted')->with('title1', $title1)->with('title', $title);
  
  
  }
  
  public function indexLogged()
  {
    $AllSongInfo = Song_data::orderBy('id', 'desc')->take(5)->get();
    $AllVideosInfo = Videos::orderBy('id', 'desc')->take(5)->get();
    $LastVideo = Videos::orderBy('id', 'desc')->first();
    
    return view('index2')->with('AllSongInfo',$AllSongInfo)->with('AllVideosInfo',$AllVideosInfo)->with('LastVideo', $LastVideo);
    
  }
  
  public function editUserTab($id)
  {
    $title1 = 'Editing';
    $title = 'Tabs';
  
    $tab = Song_data::findOrFail($id);
    
    return view('editTab')->with('tab',$tab)->with('title1', $title1)->with('title', $title);
  
  }

  public function updateTabs($id)
  {
    $title1 = 'Tab';
    $title = 'Updated';
    
    $t = Song_data::findOrFail($id);
    $t->fill(\Input::all());
    $t->save();
    
    return view('TabUpdated')->with('title1', $title1)->with('title', $title);
    
  }
  
   public function updateVideos($id)
  {
    $title1 = 'Video';
    $title = 'Updated';								
    
    $t = Videos::findOrFail($id);
    $t->fill(\Input::all());
    $t->save();
    
    return view('VideoUpdated')->with('title1', $title1)->with('title', $title);
    
  }
  
  public function deleteTabs($id)
  {
    $title1 = 'Tab';
    $title = 'Deleted';
    
    $t = Song_data::findOrFail($id);
    $t->delete();
    
    return view('TabDeleted')->with('title1', $title1)->with('title', $title);
  
  
  }
  
  
  //VOTES
  public function voteTab($id)
  {
	
	$t = Song_data::findOrFail($id);
	
	$idUser = \Auth::user()->id;
	
	$checkVote = Vote::where('votable_id', $id)->where('user_id', $idUser)->where('votable_type', 'App\Song_data')->get();
	

	if($checkVote->isEmpty()){
		$v = new Vote;
		$v->vote = 1;
		$v->user()->associate(\Auth::user());
		$v->votable_id= $id;
		$v->votable_type= "App\Song_data";
		$v-> save();

	}else{
		$checkVote = Vote::where('votable_id', $id)->where('user_id', $idUser)->where('votable_type', 'App\Song_data')->where('vote', -1)->first();

		$checkVote->vote= 1;
		$checkVote->save();
	}
	
  }
  
  public function voteTabDown($id)
  {

	
	$t = Song_data::findOrFail($id);
	

	
	$idUser = \Auth::user()->id;
	
	var_dump($id);
	var_dump($idUser);
	
	
	$checkVote = Vote::where('votable_id', $id)->where('user_id', $idUser)->where('votable_type', 'App\Song_data')->get();
	

	if($checkVote->isEmpty()){
		$v = new Vote;
		$v->vote = -1;
		$v->user()->associate(\Auth::user());
		$v->votable_id= $id;
		$v->votable_type= "App\Song_data";
		$v->save();

	}else{
		$checkVote = Vote::where('votable_id', $id)->where('user_id', $idUser)->where('votable_type', 'App\Song_data')->where('vote', 1)->first();

		$checkVote->vote= -1;
		$checkVote->save();
	}
	
  }
  
  
  
  public function logout()
  {
    
    
    \Auth::logout();
    
    return view('loggedOut');
  }
  

}