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
			@if(count($videoInfo))
				<table class="table table-condensed">
					<tr>
						<th>Song</th>
						<th>Artist</th>
						<th>Author</th>
						<th>Album</th>
						<th>Watch</th> 						 
					</tr>
					@foreach ($videoInfo as $VideosInfo)
					<tr>
						<td><a href="{{url('videosong')}}/{{ $VideosInfo->video_name }}">{{ $VideosInfo->video_name }}</a></td>
						<td><a href="{{url('videoartist')}}/{{$VideosInfo->video_artist }}">{{$VideosInfo->video_artist }}</a></td>
						<td><a href="{{url('videoauthor')}}/{{ $VideosInfo->video_author }}">{{ $VideosInfo->video_author }}</a></td>
						<td><a href="{{url('videoalbum')}}/{{ $VideosInfo->video_album }}">{{ $VideosInfo->video_author }}</a></td>
						<td><a href="{{url('watchvideo')}}/{{$VideosInfo->id}}">Watch Video</a></td>						
					</tr>
					@endforeach
				</table>
			@else
				<h3>Sorry, we don´t have any records</h3>
			@endif	
			</div>
		</div>	
	</div>
	
	
	@if(count($videoInfo))
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
	@endif
</div>	
@include('footer')