<?php namespace App\Http\Controllers;
use \App\Song_data;
use \App\Videos;
use \App\Vote;
use URL;


class searchTabsController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	
	
	//TABS STUFF
  
  public function searchSongInfo($songtitle)   
  {
    $songs = Song_data::where('song', $songtitle)->paginate(10);
    
	$url = URL::full();
	
	$songs->setPath($url);
    $title1= 'Song';
    

    
    $title = $songtitle;
   
    
    return view('infoSongDisplayer')->with("LastTenTabs", $songs)->with('title1', $title1)->with('title', $title);
  }
  
  public function searchAlbumInfo($albumtitle)
  {
    $album = Song_data::where('album', $albumtitle)->paginate(10);
	
	$url = URL::full();
    
	$album->setPath($url);
	
    $title1 = 'Album';
    
    $title = $albumtitle;
    
    $LastTenTabs = $album;
    
    return view('infoSongDisplayer')->with("LastTenTabs", $album)->with('title1',$title1)->with('title', $title);  
  }
  
  public function searchArtistInfo($artisttitle)
  {
    $artist = Song_data::where('artist', $artisttitle)->paginate(10);
	
	$url = URL::full();
	
	$artist->setPath($url);
	
    $title1= 'Artist';
	$title = $artisttitle;
    $LastTenTabs = $artist;
    
    return view('infoSongDisplayer')->with("LastTenTabs", $artist)->with('title1',$title1)->with('title', $title);  
  }
  
  public function searchDifficultyInfo($difficultytitle)
  {
    $difficulty = Song_data::where('difficulty', $difficultytitle)->paginate(10);
	
	$url = URL::full();
	
	$difficulty->setPath($url);
    
    $title1= 'Difficulty';
    
    $title= $difficultytitle;
    
    $LastTenTabs = $difficulty;
    
    return view('infoSongDisplayer')->with("LastTenTabs", $difficulty)->with('title1',$title1)->with('title', $title);  
  }
  
  
  // DISPLAY TAB
  
  public function displayTab($nameTitle)
  {
    $name = Song_data::where('song', $nameTitle)->get();
	
	
	$id = Song_data::where('song', $nameTitle)->pluck('id');
	$voteCount = Vote::where('votable_id', $id)->where('votable_type', 'App\Song_data')->sum('vote');

    
    $title1= $nameTitle;
    
    $title = 'Tab';    
	

        
    return view('viewTab')->with('LastTenTabs', $name)->with('title1', $title1)->with('title', $title)->with('voteCount', $voteCount);
  
  }
  

  
  


  public function searchFullText()
  {
    $parameterName= \Input::get('parameterName');
	
	$title = $parameterName;
	$title1 = 'Search';
    
    $parameterField = Song_data::whereRaw("MATCH(song, artist, album) AGAINST(? IN BOOLEAN MODE)",[$parameterName])->paginate(10);
	
	$url = URL::full();
	$parameterField->setPath($url);

    $LastTenTabs = $parameterField;
    
    return view('infoSongDisplayer')->with("LastTenTabs", $LastTenTabs)->with('title', $title)->with('title1', $title1);
  }
  
  
  //VIDEOS STUFF
  
  public function VideoNameInfo($videotitle)
  {
    $videos = Videos::where('video_name', $videotitle)->paginate(10);
	
	$url = URL::full();
	
	$videos->setPath($url);
    
    $title1= 'Video Cover';
    $title = $videotitle;
   
    $videoInfo = $videos;
    return view('displayVideoInfo')->with("videoInfo", $videos)->with('title1', $title1)->with('title', $title);
  }
  
  public function VideoAuthorInfo($video_authortitle)
  {
    $video_author = Videos::where('video_author', $video_authortitle)->paginate(10);
	
	$url = URL::full();
	
	$video_author->setPath($url);
    
    $title1= 'Video Cover';
    
   
    
    $title = $video_authortitle;
   
    $videoInfo = $video_author;
    return view('displayVideoInfo')->with("videoInfo", $video_author)->with('title1', $title1)->with('title', $title);
  }
  
  public function VideoArtistInfo($video_artisttitle)
  {
    $video_artist = Videos::where('video_artist', $video_artisttitle)->paginate(10);
    
	$url = URL::full();
	
	$video_artist->setPath($url);
    $title1= 'Video Cover';
	
    
   
    
    $title = $video_artisttitle;
   
    $videoInfo = $video_artist;
    return view('displayVideoInfo')->with("videoInfo", $video_artist)->with('title1', $title1)->with('title', $title);
  }
  
  public function VideoAlbumInfo($video_albumtitle)
  {
    $video_album = Videos::where('video_album', $video_albumtitle)->paginate(10);
    
	$url = URL::full();
	
	$video_album->setPath($url);
	
    $title1= 'Video Cover';
    
   
    
    $title = $video_albumtitle;
   
	$videoInfo = $video_album;
    return view('displayVideoInfo')->with("videoInfo", $video_album)->with('title1', $title1)->with('title', $title);
  }
  
  public function displayVideo($id)
  {
	
	$videoName = Videos::where('id', $id)->first();
	
	$videoUrl = $videoName->video_url;
	
	
	$watchVideoTitle = Videos::where('id', $id)->pluck('video_name');

	$title1 = 'Watch';
	
	$title= $watchVideoTitle;
	
	$videoInfo = $videoName;
	
	return view('watchVideo')->with('videoInfo', $videoName)->with('title1', $title1)->with('title', $title)->with('videoUrl', $videoUrl);
  
  }
  
  
  
  
  
 
}