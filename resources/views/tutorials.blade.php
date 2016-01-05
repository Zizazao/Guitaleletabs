@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
<div class="container marketing">
	<div class="top-buffer">
		<h2>Tutorials</h2>
		<div class="row featurette">
			<div class="col-md-10">
			<p>Sorry we are working on this page!</p> 
			
			</div>
		</div>	
	</div>
</div>
			

@include('footer')