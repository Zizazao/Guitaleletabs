<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    @if ($title) 
      <title>  {{$title1}} {{$title}} - Guitalele Tabs</title>
    @else
      <title>Guitalele Tabs</title>
    @endif
    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed  TOOLTIPSTER-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/tooltipster.css')}}" />
    <script src="{{asset('js/jquery.tooltipster.min.js')}}"></script>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    
    <script src="{{asset('js/hungryscroller.js')}}"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

	
	<script>
	$(document).ready(function(){
    //Handles menu drop down for search
		$('.dropdown-menu').find('form').click(function (e) {
			e.stopPropagation();
		});
		
	//tooltipster calls chord imgs to display when mouseover on tablatures content code example -Ab-
		$('.chord').find("a").each(function(){
			var filename = $(this).attr("class");
      
			$(this).tooltipster({
		   content: $('<span><img src="{{asset("/css")}}/'+filename+'.PNG"></span>')
		   });
		});
		
	//hungry scroller function	
		$('body,html').hungryscroller({
		 
		  // scrolls through document in 45 seconds
		  slowSpeed: 45000,
		 
		  // scrolls through document in 22 seconds
		  medSpeed: 22000,
		 
		  // scrolls through document in 15 seconds
		  fastSpeed: 15000
 
		});
		
	});

    </script>
	
	
  </head>
  
<!-- NAVBAR
================================================== -->
	
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

								<a class="navbar-brand" href="{{action('loggedController@indexLogged')}}">Guitalele Tabs</a>

						</div>
						<div id="navbar" class="navbar-collapse collapse">
							  <ul class="nav navbar-nav">
								<li><a href="{{action('loggedController@indexLogged')}}">Home</a></li>
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
								<li class="active"><a href=""><b>Logged as {!! Auth::user()->name; !!}</a></b></li>
                
                <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>Manage Account</b> <span class="caret"></span></a>
								  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{action('loggedController@getUserTabs')}}">Uploaded Tabs</a></li>
                    <li><a href="{{action('loggedController@getUserVideos')}}">Shared Videos</a></li>
                  </ul>
                </li>
								<li class="active"><a href="{{action('loggedController@logout')}}"><b>Log Out</a></b></li>
							</ul>
							
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
		<hr class="featurette-divider">
		
