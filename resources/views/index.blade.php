<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Guitalele Tabs</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>

    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>	

    <link rel="stylesheet" type="text/css" href="{{asset('css/tooltipster.css')}}" />
    <script src="{{asset('js/jquery.tooltipster.min.js')}}"></script>

    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
	<script>
		$(document).ready(function(){

			$('.dropdown-menu').find('form').click(function (e) {
				e.stopPropagation();
			});
		});

      $('#my-tooltip').tooltipster({
        content: $('<span><img src="css/fotos/guitalele_bosque.jpg"/></span>')
      });
       
    </script>
	
	
  </head>


  <body>
    
	<div class="navbar-wrapper">
		<div class="container">
			<div class="col-md-12">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

								<a class="navbar-brand" href="{{action('indexController@index')}}">Guitalele Tabs</a>

						</div>
						<div id="navbar" class="navbar-collapse collapse">
							  <ul class="nav navbar-nav">
								<li><a href="{{action('indexController@index')}}">Home</a></li>
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tablatures <span class="caret"></span></a>
								  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{action('loggedController@getTab')}}">Add Tab</a></li>
                    <li><a href="{{action('indexController@LastTabs')}}">Last Tabs</a></li>
                   
                    <li class="divider"></li>
                    <li class="dropdown-header">Search by difficulty</li>
                    
                    <li><a href="{{url('difficulty/novice')}}">Novice</a></li>
                    <li><a href="{{url('difficulty/medium')}}">Medium</a></li>
                    <li><a href="{{url('difficulty/hard')}}">Hard</a></li>
                
								  </ul>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Videos <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
											<li><a href="{{action('loggedController@getVideo')}}">Share your Video Cover</a></li>
											<li><a href="#">See Last Video Covers</a></li>
									</ul>
								</li>
								
								<li><a href="{{action('indexController@chords')}}">Chords</a></li>
								<li><a href="{{action('indexController@tutorial')}}">Tutorials</a></li>
								
								<li><a href="{{url('auth/register')}}">Create Account</a></li>
								
								
								
								<li class="dropdown">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown">Search <strong class="caret"></strong></a>
									<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                   {!! Form::open(array('action' => 'searchTabsController@searchFullText')) !!}

                    {!! Form::text('parameterName', null, array('class'=>'form-control',
                    'placeholder'=>'Song, Artist, Album...')) !!}                  

                    {!! Form::submit('Send', array('class'=>'btn btn-primary')) !!}

                    {!! Form::close() !!} 
									</div>
								</li>
								<li class="active"><a href="{{url('auth/login')}}"><b>Log In</a></b></li>

							</ul>
							
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{asset('css/fotos/slider1.jpg')}}" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Create Account</h1>
              <p>Join our community to get all information and share your tabs!</p>
              <p><a class="btn btn-lg btn-primary" href="{{url('auth/register')}}" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('css/fotos/guitalele_bosque.jpg')}}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Soon!</h1>
              <p>This Web is under construction and it will be updated frequently. If you have any idea or problem feel free to contact me via e-mail at Guitaleletabs@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('css/fotos/slider3.jpg')}}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Our latest Tabs</h1>
              <p>See the last Tabs uploaded by the community and vote them if you like!</p>
              <p><a class="btn btn-lg btn-primary" href="lasttabs" role="button">Browse Tablatures</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	<div class="container marketing">

      
      <div class="row">
        <div class="col-md-2 col-md-offset-1 circle-text">
          <img class="img-circle" src="{{asset('css/fotos/guitalele_redondo.jpg')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Discovering Guitalele</h2>
          <p>Learn more about this small, great hybrid instrument!!</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 circle-text">
			<img class="img-circle" src="{{asset('css/fotos/zapatillas_guitalele.jpg')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
			<h2>Community</h2>
			<p>Become a part of our growing community to <b><a <a href="{{action('loggedController@getTab')}}">add</a></b> and search any tab or <b><a href="{{action('loggedController@getVideo')}}">share your video covers</a></b> with us!</p>
			
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 circle-text">
          <img class="img-circle" src="{{asset('css/fotos/chords.jpg')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Technics</h2>
          <p>Practice or learn about <b><a href="">chords</a></b> and more with our community guides!</p>
          
        </div>
      </div>

	

    <div class="container marketing">


	  
		<div class="row">
			<div class="col-md-5">
			  <h3>Last Covers</h3>
			  @if(count($AllVideosInfo))
			  <table class="table table-condensed">
				<tr>
					<th>Song</th>
					<th>Artist</th>
					<th>Author</th>
					<th>Album</th>
					<th>Watch</th> 	 						 
				</tr>
				 @foreach ($AllVideosInfo as $VideosInfo)
				<tr>
					<td><a href="{{url('videosong')}}/{{ $VideosInfo->video_name }}">{{ $VideosInfo->video_name }}</a></td>
					<td><a href="{{url('videoartist')}}/{{$VideosInfo->video_artist }}">{{$VideosInfo->video_artist }}</a></td>
					<td><a href="{{url('videoauthor')}}/{{ $VideosInfo->video_author }}">{{ $VideosInfo->video_author }}</a></td>
					<td><a href="{{url('videoalbum')}}/{{ $VideosInfo->video_album }}">{{ $VideosInfo->video_album }}</a></td>
					<td><a href="{{url('watchvideo')}}/{{$VideosInfo->id}}">Watch Video</a></td>
				</tr>
				@endforeach
				</table>
			  	
			</div>
			
		  
		  
			<div class="col-md-4">
				<h3>Last Cover</h3>

				<h3>{{ $LastVideo->video_name }}</h3>
				<h4>By {{ $LastVideo->video_author }}</h4>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="<?php 
             $data = 'watch?v=';
             $replace = 'embed/';           
             echo str_replace($data, $replace, $LastVideo->video_url);
             
             ?>"
             allowfullscreen></iframe>
             @else
				<h3>Sorry, we don´t have any records</h3>
			 @endif
					</div>

			</div>
				
		</div>	
		




      
		<h2>Last Tabs</h2>
		<div class="row featurette">
			<div class="col-md-9">
				<table class="table table-condensed">
				<tr>
						<th>Song</th>
						<th>Artist</th>
						<th>Album</th>
						<th>Difficulty</th>
						<th>View</th> 						 
					</tr>
					
          @foreach ($AllSongInfo as $SongInfo)
    

					<tr>
						<td><a href="{{url('song')}}/{{$SongInfo->song}}">{{ $SongInfo->song }}</a></td>
						<td><a href="{{url('artist')}}/{{ $SongInfo->artist }}">{{ $SongInfo->artist }}</a></td>
						<td><a href="{{url('album')}}/{{ $SongInfo->album }}">{{ $SongInfo->album }}</a></td>
						<td><a href="{{url('difficulty')}}/{{ $SongInfo->difficulty }}">{{ $SongInfo->difficulty }}</a></td>
						<td><a href="{{url('viewtab')}}/{{ $SongInfo->song }}">View Tab</a></td>
					</tr>
          @endforeach
				</table>
			</div>
		</div>





      </div>
      
      
      <footer class="footer">
			<div class="col-md-9"> 
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p><a href="{{action('indexController@references')}}">Picture references</a></p>
				<p><a href="{{action('indexController@legalWarning')}}">Legal Warning</a> - Contact: Guitaleletabs@gmail.com
				<p>GUITALELETABS.COM DO NOT OWN ANY SONGS, LYRICS OR ARRANGEMENTS POSTED.</p>
			</div>
		</footer>

  </body>
</html>