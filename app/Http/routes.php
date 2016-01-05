<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
	//INDEX STUFF

Route::get('/', 'indexController@index');
Route::get('show/{id}', 'indexController@showSong');
Route::get('lasttabs', 'indexController@LastTabs');
Route::get('references', 'indexController@references');
Route::get('legalwarning', 'indexController@legalWarning');
Route::get('chords', 'indexController@chords');
Route::get('tutorials', 'indexController@tutorial');


	//SECURITY STUFF //ADD VIDEOS AND TABS

Route::group(['middleware'=> ['auth']], function()
{
  Route::get('home', 'loggedController@indexLogged');
  Route::get('addTab', 'loggedController@getTab');
  Route::post('getTab', 'loggedController@saveTab');
  Route::get('addVideo', 'loggedController@getVideo');
  Route::post('getVideo', 'loggedController@saveVideo');
  Route::get('logout','loggedController@logout');
  
  Route::get('usertabs', 'loggedController@getUserTabs'); 
  
  Route::get('usertabs/{id}/edit', 'loggedController@editUserTab'); 
  
  Route::get('uservideos', 'loggedController@getUserVideos');
  
  Route::get('uservideos/{id}/edit', 'loggedController@editUserVideo'); 
  
  Route::get('video/deleted/{id}', 'loggedController@deleteVideos');

  Route::post('video/edited/{id}', 'loggedController@updateVideos');
  
  //VOTE
  Route::get('voting/{id}', 'loggedController@voteTab');
  
  Route::get('votingDown/{id}', 'loggedController@voteTabDown');
  
  
  Route::post('tab/edited/{id}', 'loggedController@updateTabs');
  
  Route::get('tab/deleted/{id}', 'loggedController@deleteTabs');
  


});

	//SONGS STUFF

Route::post('fullsearch', 'searchTabsController@searchFullText');
Route::get('artist/{parameterName}', 'searchTabsController@searchArtistInfo');
Route::get('album/{parameterName}', 'searchTabsController@searchAlbumInfo');
Route::get('difficulty/{parameterName}', 'searchTabsController@searchDifficultyInfo');
Route::get('song/{parameterName}', 'searchTabsController@searchSongInfo');
Route::get('viewtab/{parameterName}', 'searchTabsController@displayTab');

	//VIDEO STUFF
Route::get('videoauthor/{parameterName}', 'searchTabsController@VideoAuthorInfo');
Route::get('videosong/{parameterName}', 'searchTabsController@VideoNameInfo');
Route::get('videoalbum/{parameterName}','searchTabsController@VideoAlbumInfo');
Route::get('videoartist/{parameterName}','searchTabsController@VideoArtistInfo');
Route::get('watchvideo/{id}','searchTabsController@displayVideo');

//TEST

Route::get('/testingmail', function()
{
	$data = [];
	Mail::send('emails.welcome', $data, function($message)
	{
		$message->to('zizamv@gmail.com')->subject('Welcome to GuitaleleTabs');
	});

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
