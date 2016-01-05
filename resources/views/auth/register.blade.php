@include('header')

	<div class="container marketing">	
		<div class="top-buffer">
			<div class="row featurette">
				<h1>Creating your Account</h1>
				<div class="form-group">
					<div class="col-md-6">
               @foreach($errors->all() as $error)
                  <p class="alert alert-danger">{!!$error!!}</p>
                @endforeach
              
              {!! Form::open(array('url' => 'auth/register')) !!}
						
              {!! Form::label('email', 'E-Mail:') !!}
              {!! Form::email('email', null, array('class'=>'form-control',
              'placeholder'=>'Example@gmail.com')) !!}
              
              {!! Form::label('name', 'User Name:') !!}
              
              {!! Form::text('name', null, array('class'=>'form-control',
              'placeholder'=>'Coolest Name Ever...')) !!}   
              
              {!! Form::label('password', 'Password:') !!}
                
              {!! Form::password('password', array('class'=>'form-control',
              'placeholder'=>'Something You Will Remember :)')) !!}
                
              {!! Form::label('password_confirmation', 'Please confirm your password:') !!}
              
              {!! Form::password('password_confirmation', array('class'=>'form-control',
              'placeholder'=>'You are almost done!')) !!}

              {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
              {!! Form::reset('Reset', array('class'=>'btn btn-primary')) !!}
							
						{!! Form::close() !!}
					</div>	
				</div>	
			</div>
		</div>
	</div>	
					
					<!-- FORM FROM LARAVEL
					
							<form class="form-horizontal" role="form" method="POST" action="/auth/register">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="form-group">
									<label class="col-md-4 control-label">Name</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="name" value="{{ old('name') }}">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">E-Mail Address</label>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" value="{{ old('email') }}">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Confirm Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password_confirmation">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
											Register
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
							ENDS HERE				-->
@include('footer')
