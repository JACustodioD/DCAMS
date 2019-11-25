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
	<div class="cont-mensaje">
			<button type="button" class="close mb-2" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
		<div class="row shadow-sm p-3 mb-5 bg-white rounded">
			<div class="col-md-3">	
				<p>Nombre paciente</p>		
			</div>
			<div class="col-md-3">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint iusto laborum cumque nostrum! Eos totam iusto ipsum earum distinctio impedit, 
				</p>
			</div>
			<div class="col-md-2">
				<p>Télefono</p>
			</div>
			<div class="col-md-2">
				<p>Fecha</p>
			</div>
			<div class="col-md-2">
				<button class="btn btn-danger">Atendido</button>
			</div>
		</div>

	</div>
</div>

@endsection