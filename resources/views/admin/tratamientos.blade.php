@extends('layouts.admin')

@section('content')
<div class="container mt-3">
	<div class="paciente-trat">
		<div class="row">
			<div class="col-md-12">
				<h5 class="text-info">Pacientes / Tratamientos <b> (Nombre paciente) </b></h5>
			</div>
		</div>
	</div>
</div>
<div class="container mt-3">
	<div class="shadow p-3 mb-5 bg-white rounded">
		<form action="">
			<div class="row">
				<div class="col-md-12">
						<h3>Agregar un nuevo tratamiento.</h3>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Tratamientos disponibles</label>
							<select class="form-control" id="exampleFormControlSelect1">
							<option>Limpieza dental</option>
							<option>Blanqueamiento dental</option>
							<option>Implantes dentales</option>
							<option>Diseño de sonrisa</option>
							<option>Ortodoncia</option>
							<option>Endodoncia</option>
							<option>Periodoncia</option>
							</select>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Detalles:</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
				</div>
				<div class="col-md-6">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Costo:</label>
							<input class="form-control" type="text">
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Fecha de incio:</label>
						<input class="form-control" type="date">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Fecha de término:</label>
						<input class="form-control" type="date">
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-4">
					<button class="btn btn-primary btn-block" >Agregar tratamiento</button>
				</div>
			</div>
	     </form>
	 </div>
</div>
@endsection