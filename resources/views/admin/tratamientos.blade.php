@extends('layouts.admin')

@section('content')
@if(sizeOf($treatments)>0)
<div class="container mt-3">
	<div class="paciente-trat">
		<div class="row">
			<div class="col-md-12">
				<h5 class="text-info">Pacientes / Tratamientos <b> @foreach ($treatments as $treatment)
					{{$treatment->name}} @endforeach</b></h5>
			</div>
		</div>
	</div>
</div>

<div class="container mt-3">
	<div class="shadow p-3 mb-5 bg-white rounded">
		<div class="row">
			<div class="col-md-12">
				<h3>Tratamientos en curso</h3>
			</div>
		</div>
		@foreach ($treatments as $treatment)
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Tratamiento:</label>
					<p>{{$treatment->name}}</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Costo:</label>
					<p>{{$treatment->cost}}</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Fecha de inicio:</label>
					<p>{{$treatment->startDate}}</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Fecha de término:</label>
					<p>{{$treatment->endDate}}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<button class="btn btn-light">Finalizar tratamiento</button>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalLong">Ver pagos</button>
				<button type="button" class="btn btn-primary"  data-toggle="modal"  data-target="#agregarpago">Agregar pago</button>
				
			</div>
		</div>
		@endforeach
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

@else

@endif

<!--MODAL DE VER PAGOS-->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header bg-primary text-white">
		  <h5 class="modal-title" id="exampleModalLongTitle">(Nombre del tratamiento)</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<table class="table table-hover">
				<thead>
				  <tr>
					<th scope="col">Cantidad</th>
					<th scope="col">Fecha</th>
					<th scope="col">Restante</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
				  </tr>
				</tbody>
			  </table>
		</div>
	  </div>
	</div>
  </div>
  <!--MODAL DE AGREGAR PAGO-->
  <!-- Modal -->
  <div class="modal fade" id="agregarpago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header bg-primary text-white">
		  <h5 class="modal-title" id="exampleModalLongTitle">(Nombre tratamiento)</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<table class="table table-hover">
				<thead>
				  <tr>
					<th scope="col">Cantidad</th>
					<th scope="col">Fecha</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<th scope="row">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="$MXN">
						</div>
					</th>
					<td>
						<div class="form-group">
							<input class="form-control" type="date">
						</div>
					</td>
					<td>
						<div class="form-group">
							<button type="button" class="btn btn-primary">Agregar</button>
						</div>
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
@endsection