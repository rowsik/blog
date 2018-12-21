@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
		<strong>Sucess:</strong> {{ Session::get('success')}}
	</div>

@endif

{{-- 
@if (Count($errors)>0)
<div class="alert alert-danger" role="alert">
	<strong>Errors:</strong>
		<ul>
			@foreach($erros->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>

</div>


@endif --}}