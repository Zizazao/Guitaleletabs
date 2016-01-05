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
				<table class="table table-condensed">
					<tr>
						<th>Song</th>
						<th>Artist</th>
						<th>Album</th>
						<th>Difficulty</th>
						<th>View</th>
            <th>Edit Tab</th>
            <th>Delete Tab</th>
					</tr>
					@foreach ($UserTabs as $UserTab)
					<tr>
						<td><a href="{{url('song')}}/{{ $UserTab->song }}" >{{ $UserTab->song }}</td></a>
						<td><a href="{{url('artist')}}/{{ $UserTab->artist }}" >{{ $UserTab->artist }}</td></a>
						<td><a href="{{url('album')}}/{{ $UserTab->album }}" >{{ $UserTab->album }}</td></a>
						<td><a href="{{url('difficulty')}}/{{ $UserTab->difficulty }}">{{ $UserTab->difficulty }}</td></a>
						<td><a href="{{url('viewtab')}}/{{ $UserTab->song }}">View Tab</a></td>
            <td><a href="{{url('usertabs')}}/{{ $UserTab->id }}/edit">Edit</a></td>
            <td><a href="{{url('tab/deleted')}}/{{ $UserTab->id }}">Delete</a></td>            
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
