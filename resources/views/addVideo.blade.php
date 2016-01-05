@include('headerLogged')
<div class="container marketing">
	<div class="top-buffer">
		<h1>Uploading Your Cover</h1>
		
		<form action="{{$url}}" method="POST">
			<tr>
				<div class="col-md-6">
					<td><b>Insert URL here (youtube):</b></td>
					<td><input type="text" class="form-control" name="video_url" </td></td>
					<td><b>Author:</b></td>
					<td><td><input type="text" class="form-control" name="video_author" </td>
					<td><b>Song Name:</b></td>
					<td><td><input type="text" class="form-control" name="video_name" </td>
					<td><b>Artist Name:</b></td>
					<td><td><input type="text" class="form-control" name="video_artist" </td>
					<td><b>Album Name:</b></td>
					<td><td><input type="text" class="form-control" name="video_album" </td>
					<td><b>Insert some description here:</b></td>
					<textarea class="form-control" name="video_description" rows="10" ></textarea>
				<button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit Video</button>
				<button type="reset" class="btn btn-primary" name="reset">Reset</button>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</div>
		</form>
	</div>		
			<div class="container"></div>
</div>			
@include('footer')