@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
	<div class="container marketing">	
		<div class="top-buffer col-md-11">
			<h1>References to the images resources</h1>
		
			<b>The following pictures belongs to <a href="https://www.flickr.com/photos/fhgitarre/">https://www.flickr.com/photos/fhgitarre/</a>:
			
			<p><a href="css/fotos/guitalele_redondo.jpg">guitalele_redondo.jpg</a></p>
			<p><a href="css/fotos/guitalele_bosque.jpg">guitalele_bosque.jpg</a></p>
			<p><a href="css/fotos/Arbol_gigante.jpg">Arbol_gigante.jpg</a></p>
			<p><a href="css/fotos/zapatillas_guitalele.jpg">zapatillas_guitalele.jpg</a></p></b>
			
			<p><b>The following pictures belongs to <a href="https://www.flickr.com/photos/cogdog/">https://www.flickr.com/photos/cogdog/</a>:
			<p><a href="css/fotos/slider1.jpg">slider1.jpg</a></p>
			</b></p>
			
			
			<p><b>The following pictures belongs to <a href="https://www.flickr.com/photos/chrisrehm/">https://www.flickr.com/photos/chrisrehm/</a>:
			<p><a href="css/fotos/chords.jpg">chords.jpg</a></p>
			</b></p>
			<p><b>The following pictures belongs to <a href="http://www.freepik.es/fotos-vectores-gratis/vintage">Vector de Vintage diseñado por Freepik</a>:
			<p><a href="css/fotos/sideback.jpg">sideback.jpg</a></p>
			</b></p>
			
		</div>
	</div>
@include('footer')