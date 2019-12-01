@extends('layouts.admin')

@section('content')
<div class="container mt-3">
	<div class="paciente-cita">
		<div class="row">
			<div class="col-md-12">
				<h5 class="text-info">Pacientes / citas <b> (Nombre paciente) </b></h5>
			</div>
		</div>
	</div>
</div>
<div class="container mt-3">
    <div class="shadow p-3 mb-5 bg-white rounded">
         <div class="row">
             <div class="col-md-12">
                 <h3>Próxima cita:</h3>
             </div>
         </div>
         <div class="row">
             <div class="col-md-2">
                 <div class="form-group">
                     <label for="exampleFormControlTextarea1">Fecha:</label>
                        <p>...</p>
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="form-group">
                     <label for="exampleFormControlTextarea1">Hora:</label>
                     <p>...</p>
                 </div>
             </div>
             <div class="col-md-8">
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">Asunto:</label>
                     <p>...</p>
                 </div>
             </div>
            </div>
            <div class="row">
                 <div class="col-md-12 text-center">
                  <button type="button" class="btn btn-danger" data-toggle="modal"  data-target="#cancelarcita">Cancelar cita</button>
                </div>
            </div>
     </div>
 </div>

<!--MODAL CANCELACION DE CITA-->
  <!-- Modal -->
  <div class="modal fade" id="cancelarcita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLongTitle">(Nombre del paciente)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
					<label for="exampleFormControlSelect1">Motivo de cancelación</label>
					<select class="form-control" id="exampleFormControlSelect1">
					     <option>No se presento</option>
						 <option>Llego tarde a la cita</option>
					</select>
                 </div>
                 <div class="form-group text-center">
                    <button type="button" class="btn btn-primary">Aceptar</button>
                 </div>
            </div>
          </div>
        </div>
      </div>

 <div class="container mt-3">
        <div class="shadow p-3 mb-5 bg-white rounded">
             <div class="row">
                 <div class="col-md-12">
                     <h3>Nueva  cita:</h3>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-2">
                     <div class="form-group">
                         <label for="fecha">Fecha:</label>
                         <input class="form-control" type="date" name="fecha">
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="form-group">
                         <label for="hora">hora:</label>
                         <input class="form-control" type="time" name="hora">
                     </div>
                 </div>
                 <div class="col-md-8">
                     <div class="form-group">
                        <label for="asunto">Asunto:</label>
                        <input class="form-control" type="text" name="asunto">
                     </div>
                 </div>
                </div>
                <div class="row">
                     <div class="col-md-12 text-center">
                      <button type="button" class="btn btn-primary">Generar cita</button>
                    </div>
                </div>
         </div>
     </div>
@endsection