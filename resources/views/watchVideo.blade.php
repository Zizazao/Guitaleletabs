@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
<div class="container marketing">
	<div class="top-buffer">
		<h2>Video</h2>
		<div class="row featurette">
			<div class="col-md-10">
				
					

				<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="<?php 
						$data = 'watch?v=';
						$replace = 'embed/';           
						echo str_replace($data, $replace, $videoUrl);
						?>"
						
             allowfullscreen></iframe>
             
					</div>						
					
				</table>

			</div>
		</div>	
	</div>
</div>	
@include('footer')