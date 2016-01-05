@include('header')


	<div class="container marketing">	
			<div class="top-buffer">
				<div class="row featurette">
					<h1>Reset Password</h1>
					<div class="form-group">
						<div class="col-md-6">
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
						
						<form role="form" method="POST" action="laravel/public/password/reset">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="token" value="{{ $token }}">

							
								<label>E-Mail Address</label>
								
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								
							

								<label>Password</label>
									<input type="password" class="form-control" name="password">

								<label>Confirm Password</label>
									<input type="password" class="form-control" name="password_confirmation">

								<div class="form-group">
									<button type="submit" class="btn btn-primary">
										Reset Password
									</button>
								</div>
							</div>
						</form>
					</div>	
				</div>	
			</div>
		</div>
	</div>	
@include('footer')
