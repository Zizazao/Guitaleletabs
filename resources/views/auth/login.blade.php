@include('header')

	<div class="container marketing">	
		<div class="top-buffer">
			<div class="row featurette">
				<h1>Logging In</h1>
				<div class="form-group">
					<div class="col-md-6">
               @foreach($errors->all() as $error)
                  <p class="alert alert-danger">{!!$error!!}</p>
                @endforeach
              
              {!! Form::open(array('url' => 'auth/login')) !!}
						
              {!! Form::label('email', 'E-Mail:') !!}
              {!! Form::email('email', null, array('class'=>'form-control')) !!}
                
              
              {!! Form::label('password', 'Password:') !!}
                
              {!! Form::password('password', array('class'=>'form-control')) !!}
              
              {!!Form::label('remember', 'Remember Me') !!}
              {!! Form::checkbox('remember')!!}
              <div class="form-group">
              {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
							</div>
						{!! Form::close() !!}
            <h4><a href="{{url('/password/email')}}">Forgot Your Password?</a></h4>
					</div>	
				</div>	
			</div>
		</div>
	</div>	

@include('footer')
<!-- BLADE  PREDEFINED FORM



@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

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
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
                      -->