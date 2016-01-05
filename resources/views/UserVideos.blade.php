@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
<div class="container marketing">
	<div class="top-buffer">
		<h2>Videos</h2>
		<div class="row featurette">
			<div class="col-md-10">
				<table class="table table-condensed">
					<tr>
						<th>Song</th>
						<th>Artist</th>
						<th>Author</th>
						<th>Album</th>
						<th>Watch</th> 	 
            <th>Edit Tab</th>
            <th>Delete Tab</th>
					</tr>
					@foreach ($Videos as $Video)
					<tr>
						<td><a href="{{url('videosong')}}/{{ $Video->video_name }}" >{{ $Video->video_name }}</td></a>
						<td><a href="{{url('videoartist')}}/{{ $Video->video_artist }}" >{{ $Video->video_artist }}</td></a>
						<td><a href="{{url('videoauthor')}}/{{ $Video->video_author }}" >{{ $Video->video_author }}</td></a>
						<td><a href="{{url('videoalbum')}}/{{ $Video->video_album }}" >{{ $Video->video_album }}</td></a>						
						<td><a href="{{url('watchvideo')}}/{{$Video->id}}">Watch Video</a></td>
            <td><a href="{{url('uservideos')}}/{{ $Video->id }}/edit">Edit</a></td>
            <td><a href="{{url('video/deleted')}}/{{ $Video->id }}">Delete</a></td>            
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
