@if(count($errors))
		<div class="row">
			@foreach($errors->all() as $err)
			<div class="col col-xs-4">
			<div class="alert alert-danger">
				
					<small>
						&nbsp;{{$err}}
					</small>


			</div>
			</div>
			@endforeach
			</div>
		@endif