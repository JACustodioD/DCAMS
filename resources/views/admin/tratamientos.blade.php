@extends('layouts.admin')

@section('content')
<div class="container mt-3">
	<div class="paciente-trat">
		<div class="row">
			<div class="col-md-12">
				@foreach ($patient as $patient)
				<h5 class="text-info nombrePaciente" paciente="{{$patient->id}}">Pacientes / Tratamientos <b>
					{{$patient->fullName}}</b>
				</h5>
				 @endforeach
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
		<div class="cont-tratamineto">
			@if(sizeOf($treatments)>0)
				@foreach ($treatments as $treatment)

					<div class="row {{$treatment->id}} cont-tratamientos">
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Tratamiento:</label>
							<p>{{$treatment->serviceName}}</p>
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
							<label for="exampleFormControlTextarea1" >Fecha de inicio:</label>
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
					<div class="row {{$treatment->id}}">
					<div class="col-md-12 text-center">
						<button class="btn btn-light finTratamiento" tratamiento = "{{$treatment->id}}" namet = "{{$treatment->serviceName}}"  data-toggle="modal" data-target="#exampleModalLong1">Finalizar tratamiento</button>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-light btnDetalles" data-toggle="modal" data-target="#exampleModalLong" tratamiento = "{{$treatment->id}}" namet = "{{$treatment->name}}" >Ver pagos</button>
						<button type="button" class="btn btn-primary btnAddPago"  data-toggle="modal"  data-target="#agregarpago" tratamiento = "{{$treatment->id}}" namet = "{{$treatment->name}}" >Agregar pago</button>

					</div>
					</div>
				@endforeach
				@else
				
					<div class="container mt-5">
						<div class="row">
							<div class="col-md-12 text-center ups">
								<figure class="figure">
									<img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
									<figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Aún no tiene tratamientos.</h4>  </figcaption>
								</figure>
							</div>
						</div>
					</div>
				@endif


		</div>
	</div>
</div>

<div class="container mt-3">
	<div class="shadow p-3 mb-5 bg-white rounded">
			<div class="row">
				<div class="col-md-12">
						<h3>Agregar un nuevo tratamiento.</h3>
						<div class="form-group">
							<label for="seelctServicio">Tratamientos disponibles</label>
							<select class="form-control selectServicio" id="selectServicio" name="servicio">
							@foreach ($services as $service)
								<option value = "{{$service->id}}">
									{{$service->serviceName}}
								</option>
							@endforeach
							</select>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="detallesServicio">Detalles:</label>
						<textarea class="form-control" id="serviceDescription" rows="3" disabled>{{$service->serviceDescription}}</textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="costoServicio">Costo:</label>
						<input class="form-control" type="text" id="serviceCost" value="{{$service->cost}}" name="total" disabled>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Fecha de incio:</label>
						<input class="form-control" type="date" required id="startDate">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Fecha de término:</label>
						<input class="form-control" type="date" required id="endDate">
					</div>
				</div>
			</div>

			<div class="row d-flex justify-content-center">
				<div class="col-md-4">
					<button class="btn btn-primary btn-block btnAgregarT" >Agregar tratamiento</button>
				</div>
			</div>
	 </div>
</div>

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
			<table class="table table-hover tableV">
				<thead>
				  <tr>
					<th scope="col">Cantidad</th>
					<th scope="col">Fecha</th>
					<th scope="col">Restante</th>
				  </tr>
				</thead>
				<tbody>

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
							<input class="form-control" type="text" placeholder="$MXN" id="cantidad">
						</div>
					</th>
					<td>
						<div class="form-group">
							<input class="form-control" type="date" id="fechaPago">
						</div>
					</td>
					<td>
						<div class="form-group">
							<button type="button" class="btn btn-primary btnAdd" data-dismiss="modal">Agregar</button>
						</div>
					</td>
				  </tr>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>


  <!--MODAL DE CANCELAR TRATAMIENTO-->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header bg-primary text-white">
		  <h5 class="modal-title" id="exampleModalLongTitle1">(Nombre del tratamiento)</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<h4 class="text-primary">¿Seguro que desea cancelar el tratamiento?</h4>
		</div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btnBorrarT" data-dismiss="modal">Aceptar</button>
      </div>
	  </div>
	</div>
  </div>
@endsection

@section('script')
<script type="text/javascript" src="/js/tratamientos.js"></script>
@endsection
