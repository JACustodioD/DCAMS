@extends('layouts.admin')

@section('content')

<div class="container mt-3">
	<div class="mensaje">
		<div class="row">
			<div class="col-md-6">
				<h1>Mis mensajes</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">

	@foreach ($messages as $message)
	<div class="cont-mensaje">
			<button type="button" class="close mb-2" aria-label="Close">
					<span aria-hidden="true">&times;</span>
			</button>
		<div class="row shadow-sm p-3 mb-5 bg-white rounded">
			<div class="col-md-3">	
				<p>{{ $message->name }}</p>		
			</div>
			<div class="col-md-3">
				<p> {{ $message->commentary }} </p>
			</div>
			<div class="col-md-2">
				<p>{{ $message->phone }}</p>
			</div>
			<div class="col-md-2">
				<p>{{ $message->date}} | {{ $message->hour }}</p>
			</div>
			<div class="col-md-2">
				<button class="btn btn-danger">Atendido</button>
			</div>
		</div>
	</div>
	@endforeach

</div>

@endsection