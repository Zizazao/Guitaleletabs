@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
<div class="container marketing">
	<div class="top-buffer">
		<h2>Tabs</h2>
		<div class="row featurette">
			<div class="col-md-10">
			@if(count($LastTenTabs))
				<table class="table table-condensed">
					<tr>
						<th>Song</th>
						<th>Artist</th>
						<th>Album</th>
						<th>Difficulty</th>
						<th>View</th> 						 
					</tr>
					@foreach ($LastTenTabs as $LastTab)
					<tr>
						<td><a href="{{url('song')}}/{{ $LastTab->song }}" >{{ $LastTab->song }}</td></a>
						<td><a href="{{url('artist')}}/{{ $LastTab->artist }}" >{{ $LastTab->artist }}</td></a>
						<td><a href="{{url('album')}}/{{ $LastTab->album }}" >{{ $LastTab->album }}</td></a>
						<td><a href="{{url('difficulty')}}/{{ $LastTab->difficulty }}">{{ $LastTab->difficulty }}</td></a>
						<td><a href="{{url('viewtab')}}/{{ $LastTab->song }}">View Tab</a></td>						
					</tr>
					@endforeach
				</table>
			@else
				<h3>Sorry, we don´t have any records</h3>
			@endif	
			</div>
		</div>	
	</div>
	
	
	@if(count($LastTenTabs))
	<!-- PAGINACION -->
	<div class="top-buffer padding-left">
		{!!$LastTenTabs->render()!!}
	</div>
	@endif
</div>	
@include('footer')
