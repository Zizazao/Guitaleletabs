@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif

@foreach ($LastTenTabs as $LastTab)

<script>
	
	function getXMLHTTP() {
		var xmlhttp=false;

		try {
			xmlhttp=new XMLHttpRequest();
		} catch(e) {
			try {
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e) {
					try {
						xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
					} catch(e1) {
						xmlhttp=false;
					}
				}
			}
			return xmlhttp;
	}



		function enviar_datos(url, callback){  // callback(error, valor)
		 var req = getXMLHTTP();
		 if (req)
		 {
		  req.onreadystatechange = function()
		  {
			if (req.readyState == 4)
		   {
			if (req.status == 200)
			{
			 callback(false, req.responseText);
			// document.getElementById("resultado").innerText=req.responseText;
			// document.getElementById("resultado").value = req.responseText;

			}
			else
			{
				 //document.getElementById("resultado").value=0;
			 callback(true);
			}
		   }
		  }
		 // alert("url=" + url);
		  req.open("GET", url, true);
		  req.send(null);
		 }
		 else
		 {
		  //document.getElementById("resultado").value=0;
		  callback(true);
		 }
		}






		
		
		
		function votar_mas_uno()
		{
			
			var url= "{{url('voting')}}/{{$LastTab->id}}";

			enviar_datos(url, function (error, valor) {
				if (!error)
				{
					alert("Vote Success");
				}else{
					
					alert("You already UpVoted this tab!");
				}
						
			});
			
		}


		function votar_menos_uno()
		{
			

			var url= "{{url('votingDown')}}/{{$LastTab->id}}";
			
			enviar_datos(url, function (error, valor) {
				if (!error){
					alert("Vote Success");
					
				}else{
					alert("You already DownVoted this tab!");
				
				}
						
				});
			
		}
	
	</script>
	
	<div class="container marketing">	
		<div class="top-buffer col-md-11">

			
			


				
				<h2>{{ $LastTab->artist }}</h2>
				<h3>{{ $LastTab->difficulty }}</h3>
				
				@if(Auth::check())
					<button onclick="votar_mas_uno()" type="button" class="btn btn-default btn-lg">
					
					<span class="glyphicon glyphicon-thumbs-up"></span>
					
					</button>
					<b>{{$voteCount}}</b>
					<button onclick="votar_menos_uno()" type="button" class="btn btn-default btn-lg">
					
					<span class="glyphicon glyphicon-thumbs-down"></span>
					
					</button>
				@else
					<b>Votes: {{$voteCount}}</b>
					You must <a href="{{url('auth/login')}}"><b>log In</a> to Vote this Tab!
				@endif	
				<div class="panel panel-primary">
					<div class="panel-heading">
					<h3 class="panel-title">{{ $LastTab->song}}</h3>
					</div>
				
          
        
					<pre class="chord">
            <?php            
				$data = array('-Ab-','-Ab7-', '-Ab6-','-G#m-','-Ab9-','-G#m6-','-G#m7-','-Abmaj7-','-G#dim-','-Ab+-','-Absus-','-A-','-Am-','-A6-','-A7-','-A9-','-Am6-','-Am7-','-Amaj7-','-Adim-','-A+-','-Asus-','-Bb-','-Bbm-','-Bb7-','-Bb9-','-Bbm6-','-Bbm7-','-Bbmaj7-','-Bbdim-','-Bb+-','-Bbsus-','-B-','-Bm-','-B6-','-B7-','-B9-','-Bm6-','-Bm7-','-Bmaj7-','-Bbdim-','-B+-','-Bsus-','-C-','-Cm-','-C6-','-C7-','-C9-','-Cm6-','-Cm7-','-Cmaj7-','-Cdim-','-C+-','-Csus-','-Db-','-C#m-','-Db6-','-Db7-','-Db9-','-C#m6-','-C#m7-','-Dbmaj7-','-C#dim-','-Db+-','-Dbsus-','-D-','-Dm-','-D6-','-D7-','-D9-','-Dm6-','-Dm7-','-Dmaj7-','-Ddim-','-D+-','-Dsus-','-Eb-','-Ebm-','-Eb6-','-Eb7-','-Eb9-','-Ebm6-','-Ebm7-','-Ebmaj7-','-Ebdim-','-Eb+-','-Ebsus-','-E-','-Em-','-E6-','-E7-','-E9-','-Em6-','-Em7-','-Emaj7-','-Edim-','-E+-','-Esus-','-F-','-Fm-','-F6-','-F7-','-F9-','-Fm6-','-Fm7-','-Fmaj7-','-Fdim-','-F+-','-Fsus-','-F#-','-F#m-','-Gb6-','-F#7-','-F#9-','-F#m6-','-F#m7-','-Gbmaj7-','-F#dim-','-Gb+-','-Gbsus-','-G-','-Gm-','-G6-','-G7-','-G9-','-Gm6-','-Gm7-','-Gmaj7-','-Gdim-','-G+-','-Gsus-');
				$replace =array('<a href="#" class="Ab">Ab</a>','<a href="#" class="Ab7">Ab7</a>','<a href="#" class="Ab6">Ab6</a>','<a href="#" class="Gem">G#m</a>','<a href="#" class="Ab9">Ab9</a>','<a href="#" class="Gem6">G#m6</a>','<a href="#" class="Gem7">G#m7</a>','<a href="#" class="Abmaj7">Abmaj7</a>','<a href="#" class="Gedim">G#dim</a>','<a href="#" class="Abplus">Ab+</a>','<a href="#" class="Absus">Absus</a>','<a href="#" class="A">A</a>','<a href="#" class="Am">Am</a>','<a href="#" class="A6">A6</a>','<a href="#" class="A7">A7</a>','<a href="#" class="A9">A9</a>','<a href="#" class="Am6">Am6</a>','<a href="#" class="Am7">Am7</a>','<a href="#" class="Amaj7">Amaj7</a>','<a href="#" class="Adim">Adim</a>','<a href="#" class="Aplus">A+</a>','<a href="#" class="Asus">Asus</a>','<a href="#" class="Bb">Bb</a>','<a href="#" class="Bbm">Bbm</a>','<a href="#" class="Bb7">Bb7</a>','<a href="#" class="Bb9">Bb9</a>','<a href="#" class="Bbm6">Bbm6</a>','<a href="#" class="Bbm7">Bbm7</a>','<a href="#" class="Bbmaj7">Bbmaj7</a>','<a href="#" class="Bbdim">Bbdim</a>','<a href="#" class="Bbplus">Bb+</a>','<a href="#" class="Bbsus">Bbsus</a>','<a href="#" class="B">B</a>','<a href="#" class="Bm">Bm</a>','<a href="#" class="B6">B6</a>','<a href="#" class="B7">B7</a>','<a href="#" class="B9">B9</a>','<a href="#" class="Bm6">Bm6</a>','<a href="#" class="Bm7">Bm7</a>','<a href="#" class="Bmaj7">Bmaj7</a>','<a href="#" class="Bbdim">Bbdim</a>','<a href="#" class="Bplus">B+</a>','<a href="#" class="Bsus">Bsus</a>','<a href="#" class="C">C</a>','<a href="#" class="Cm">Cm</a>','<a href="#" class="C6">C6</a>','<a href="#" class="C7">C7</a>','<a href="#" class="C9">C9</a>','<a href="#" class="Cm6">Cm6</a>','<a href="#" class="Cm7">Cm7</a>','<a href="#" class="Cmaj7">Cmaj7</a>','<a href="#" class="Cdim">Cdim</a>','<a href="#" class="Cplus">C+</a>','<a href="#" class="Csus">Csus</a>','<a href="#" class="Db">Db</a>','<a href="#" class="Cem">C#m</a>','<a href="#" class="Db6">Db6</a>','<a href="#" class="Db7">Db7</a>','<a href="#" class="Db9">Db9</a>','<a href="#" class="C#m6">C#m6</a>','<a href="#" class="Cem7">C#m7</a>','<a href="#" class="Dbmaj7">Dbmaj7</a>','<a href="#" class="Cedim">C#dim</a>','<a href="#" class="Dbplus">Db+</a>','<a href="#" class="Dbsus">Dbsus</a>','<a href="#" class="D">D</a>','<a href="#" class="Dm">Dm</a>','<a href="#" class="D6">D6</a>','<a href="#" class="D7">D7</a>','<a href="#" class="D9">D9</a>','<a href="#" class="Dm6">Dm6</a>','<a href="#" class="Dm7">Dm7</a>','<a href="#" class="Dmaj7">Dmaj7</a>','<a href="#" class="Ddim">Ddim</a>','<a href="#" class="Dplus">D+</a>','<a href="#" class="Dsus">Dsus</a>','<a href="#" class="Eb">Eb</a>','<a href="#" class="Ebm">Ebm</a>','<a href="#" class="Eb6">Eb6</a>','<a href="#" class="Eb7">Eb7</a>','<a href="#" class="Eb9">Eb9</a>','<a href="#" class="Ebm6">Ebm6</a>','<a href="#" class="Ebm7">Ebm7</a>','<a href="#" class="Ebmaj7">Ebmaj7</a>','<a href="#" class="Ebdim">Ebdim</a>','<a href="#" class="Ebplus">Eb+</a>','<a href="#" class="Ebsus">Ebsus</a>','<a href="#" class="E">E</a>','<a href="#" class="Em">Em</a>','<a href="#" class="E6">E6</a>','<a href="#" class="E7">E7</a>','<a href="#" class="E9">E9</a>','<a href="#" class="Em6">Em6</a>','<a href="#" class="Em7">Em7</a>','<a href="#" class="Emaj7">Emaj7</a>','<a href="#" class="Edim">Edim</a>','<a href="#" class="Eplus">E+</a>','<a href="#" class="Esus">Esus</a>','<a href="#" class="F">F</a>','<a href="#" class="Fm">Fm</a>','<a href="#" class="F6">F6</a>','<a href="#" class="F7">F7</a>','<a href="#" class="F9">F9</a>','<a href="#" class="Fm6">Fm6</a>','<a href="#" class="Fm7">Fm7</a>','<a href="#" class="Fmaj7">Fmaj7</a>','<a href="#" class="Fdim">Fdim</a>','<a href="#" class="Fplus">F+</a>','<a href="#" class="Fsus">Fsus</a>','<a href="#" class="Fe">F#</a>','<a href="#" class="Fem">F#m</a>','<a href="#" class="Gb6">Gb6</a>','<a href="#" class="Fe7">F#7</a>','<a href="#" class="Fe9">F#9</a>','<a href="#" class="Fem6">F#m6</a>','<a href="#" class="Fem7">F#m7</a>','<a href="#" class="Gbmaj7">Gbmaj7</a>','<a href="#" class="Fedim">F#dim</a>','<a href="#" class="Gbplus">Gb+</a>','<a href="#" class="Gbsus">Gbsus</a>','<a href="#" class="G">G</a>','<a href="#" class="Gm">Gm</a>','<a href="#" class="G6">G6</a>','<a href="#" class="G7">G7</a>','<a href="#" class="G9">G9</a>','<a href="#" class="Gm6">Gm6</a>','<a href="#" class="Gm7">Gm7</a>','<a href="#" class="Gmaj7">Gmaj7</a>','<a href="#" class="Gdim">Gdim</a>','<a href="#" class="Gplus">G+</a>','<a href="#" class="Gsus">Gsus</a>');
				
				
				echo str_replace($data, $replace, $LastTab->view);
            ?>
                           
          </pre>
          
				</div>
				@endforeach	
        <div class="alert alert-danger col-md-9" role="alert">
			This arrangement for the song is the author's own work and represents their interpretation of the song. You may only use this file for private study, scholarship, or research.
		</div>
		</div>
		<ul class="scroller">
			<li class="scroll">Start Scroll</li>
			<ul class="speeds">
				<li class="slow">Slow</li>
				<li class="med">Medium</li>
				<li class="fast">Fast</li>
			</ul>
		</ul>
	</div>
	
	
  
  
@include('footer')