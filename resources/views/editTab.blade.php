@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
<div class="container marketing">
	<div class="top-buffer">
		<h1>Editing Your Tablature</h1>
		
    {!! Form::model($tab, ['url' => ['tab/edited',$tab->id]]) !!}
			<tr>
				<div class="col-md-6">
          <td><b>{!!Form::label('song_name', 'Song Name:') !!}</b></td>
					{!! Form::text('song', null, array('class'=>'form-control')) !!}
           
					<td><b>{!!Form::label('artist', 'Artist:') !!}</b></td>
					{!! Form::text('artist', null, array('class'=>'form-control')) !!}
          
					
          <td><b>{!! Form::label('album', 'Album:') !!}</b></td>
					{!! Form::text('album', null, array('class'=>'form-control')) !!}
					
          <td><b>{!!Form::label('difficulty', 'Difficulty:') !!}</b></td>
					{!! Form::select('difficulty', array('Novice'=>'Novice', 'Medium'=>'Medium', 'Hard'=>'Hard'), null, array('class'=>'form-control')) !!}

				</div>	
			</tr>
			<div class="col-md-12">
			<td><b>{!! Form::label('Tablature', 'Tablature:') !!}</b></td>
      {!! Form::textarea('view', null, array('class' => 'form-control', 'rows' => '15')) !!}
			{!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
			{!! Form::reset('Reset', array('class'=>'btn btn-primary')) !!}
      {!! Form::close() !!} 
			</div>
		</form>
	</div>		
	<div class="container"></div>
</div>			
@include('footer')