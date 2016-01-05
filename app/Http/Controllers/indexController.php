<?php namespace App\Http\Controllers;
use \App\Song_data;
use \App\Videos;


class indexController extends Controller {


   
  
	public function index()
	{

    $AllSongInfo = Song_data::orderBy('id', 'desc')->take(5)->get();
    $AllVideosInfo = Videos::orderBy('id', 'desc')->take(5)->get();
    $LastVideo = Videos::orderBy('id', 'desc')->first();
    
    return view('index')->with('AllSongInfo',$AllSongInfo)->with('AllVideosInfo',$AllVideosInfo)->with('LastVideo', $LastVideo);
	}
  
  public function LastTabs()
  {
   $LastTenTabs = Song_data::orderBy('created_at', 'desc')->paginate(7);
   $LastTenTabs->setPath('laravel/public/lasttabs/');
   $title1= 'Last';
   $title= 'Tabs';
   
   return view('infoSongDisplayer')->with('LastTenTabs', $LastTenTabs)->with('title1',$title)->with('title', $title);
  }
  public function references()
  {
	$title1= 'Pictures';
	$title= 'References';
	return view('references')->with('title1', $title1)->with('title', $title);
  }
  
  public function legalWarning()
  {
	$title1= 'Legal';
	$title= 'Warning';
	
	return view('legalWarning')->with('title1', $title)->with('title', $title);
  
  }
  
  public function chords()
  {
	$title1= 'Chart';
	$title= 'Chord';
	
	return view('chord')->with('title1', $title)->with('title', $title);
  
  }
 
 public function tutorial()
  {
	$title1= 'Tutorials';
	$title= 'Submitted';
	
	return view('tutorials')->with('title1', $title)->with('title', $title);
  
  }


}