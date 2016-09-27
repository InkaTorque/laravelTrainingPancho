@if(Session::has('success'))

	<div class="alert alert-success">
	 	<strong>Exito :</strong>{{Session::get('success')}}
	</div>

@endif

@if(count($errors)>0)
	<div class="alert alert-danger" role="alert">
		<strong>Estos son los errores</strong>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</div>
@endif