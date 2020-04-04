	@if(count($errors)>0)
		<ul class="list-group">
			@foreach($errors->all() as $error)
				<li class="list-group-item">{{$error}}</li>
			@endforeach
		</ul>
		
	@endif
   @if(Session::has('success'))
	<div class="alert alert-success alert-dismissible fade show text-white" role="alert">
		{{Session::get('success')}}
	</div>
   @endif
	@if(Session::has('danger'))
	<div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
		{{Session::get('danger')}}
	</div>
   @endif