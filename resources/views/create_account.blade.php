@include('header')
	<div class="container marketing">	
		<div class="top-buffer">
			<div class="row featurette">
			<h1>Creating your Account</h1>
					<tr>
						<div class="col-md-6">
						{!! Form::open(array('action' => 'indexController@SaveAccount')) !!}
						
							<td><b>Email:</b></td>
							
							{!! Form::text('email', 'email', array('class'=>'form-control',
							'placeholder'=>'Example@gmail.com')) !!}
							
							<td><b>User Name:</b></td>
							
							{!! Form::text('user', 'user', array('class'=>'form-control',
							'placeholder'=>'Coolest Name Ever...')) !!}   
							
							<td><b>Password:</b></td>
							
							{!! Form::text('password', 'password', array('class'=>'form-control',
							'placeholder'=>'Something You Will Remember!!')) !!}   							

							{!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
							{!! Form::reset('Reset', array('class'=>'btn btn-primary')) !!}
							
						{!! Form::close() !!}
						</div>	
					</tr>
				</form>
			</div>
		</div>
	</div>	
@include('footer')