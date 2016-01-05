@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
<div class="container marketing">
	<div class="top-buffer">
		<h2>Tabs</h2>
		<div class="row featurette">
			<div class="col-md-12">
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
						<td><a href="viewtab/id/{{ $LastTab->id }}" >See Tab</td></a>						
					</tr>
					@endforeach
				</table>
			</div>
		</div>	
	</div>
	
	
	
	<!-- PAGINACION -->
	<div class="top-buffer padding-left">
		<nav>
			<ul class="pagination">
				<li>
					<a href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
			</ul>
		</nav>
	</div>
</div>	
@include('footer')
