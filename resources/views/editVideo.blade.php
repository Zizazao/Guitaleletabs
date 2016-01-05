@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
<div class="container marketing">
	<div class="top-buffer">
		<h1>Editing your Video</h1>
		
    {!! Form::model($video, ['url' => ['video/edited',$video->id]]) !!}
			<tr>
				<div class="col-md-6">
          <td><b>{!!Form::label('video_url', 'Video Url:') !!}</b></td>
					{!! Form::text('video_url', null, array('class'=>'form-control')) !!}
           
					<td><b>{!!Form::label('video_author', 'Author:') !!}</b></td>
					{!! Form::text('video_author', null, array('class'=>'form-control')) !!}
          
					
          <td><b>{!! Form::label('video_name', 'Song Name:') !!}</b></td>
					{!! Form::text('video_name', null, array('class'=>'form-control')) !!}
					
					
		  <td><b>{!! Form::label('video_artist', 'Artist:') !!}</b></td>
					{!! Form::text('video_artist', null, array('class'=>'form-control')) !!}			
					
          <td><b>{!! Form::label('video_album', 'Album:') !!}</b></td>
					{!! Form::text('video_album', null, array('class'=>'form-control')) !!}	

				</div>	
			</tr>
			<div class="col-md-10">
			<td><b>{!! Form::label('video_description', 'Description:') !!}</b></td>
      {!! Form::textarea('video_description', null, array('class' => 'form-control', 'rows' => '15')) !!}
			{!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
			{!! Form::reset('Reset', array('class'=>'btn btn-primary')) !!}
      {!! Form::close() !!} 
			</div>
		</form>
	</div>		
	<div class="container"></div>
</div>			
@include('footer')