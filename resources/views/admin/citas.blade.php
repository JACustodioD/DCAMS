@extends('layouts.admin')

@section('content')
<div class="container mt-3">
	<div class="paciente-cita">
		<div class="row">
			<div class="col-md-12">
				@foreach ($users as $user)
                    <h5 class="text-info nombrePaciente" npaciente="{{$user->name}}" paciente="{{$user->id}}">Pacientes / Citas <b>
                        {{$user->name}}</b>
                    </h5>
                @endforeach
			</div>
		</div>
	</div>
</div>
<div class="container">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Citas</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Nuevas Citas</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
    @if(sizeOf($dates)>0)
    <div class="container mt-3">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-md-12">
                    <h3>Próxima cita:</h3>
                   
                </div>
            </div>
            @foreach($dates as $date)
            @if(strcmp($date->dateStatus,'Pendiente')==0)
            <div class="row">
                <div class="col-md-2">
                     <div class="form-group">
                         <label for="exampleFormControlTextarea1">Fecha:</label>
                            <p>{{date('d-m-Y',strtotime($date->dateOfAppointment)) }}</p>
                     </div>
                 </div>
                 <div class="col-md-2">
                     <div class="form-group">
                         <label for="exampleFormControlTextarea1">Hora:</label>
                         <p>{{$date->hour}}</p>
                     </div>
                 </div>
                 <div class="col-md-8">
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Asunto:</label>
                         <p>{{$date->affair}}</p>
                     </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                      <button type="button" class="btn btn-danger btnCancelar" data-toggle="modal"  data-target="#cancelarcita" cita="{{$date->id}}">Cancelar cita</button>
                </div>
            </div>
            @endif
            @endforeach
         </div>
     </div>
    @else
    <div class="container mt-5">
        <div class="row">
               <div class="col-md-12 text-center">
                  <figure class="figure">
                     <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
                      <figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Aún no tiene citas.</h4>  </figcaption>
                   </figure>
               </div>
         </div>
    </div>
    @endif
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container mt-3">
                <div class="shadow p-3 mb-5 bg-white rounded">
                     <div class="row">
                         <div class="col-12">
                             <h3>Nueva  cita:</h3>
                         </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                            <div class="alert-dcams alert-danger" id="alert_error" role="alert" hidden></div>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-2">
                             <div class="form-group">
                                 <label for="fecha">Fecha:</label>
                                 <input class="form-control" type="date" name="fecha" id="fecha">
                             </div>
                         </div>
                         <div class="col-md-2">
                             <div class="form-group">
                                 <label for="hora">hora:</label>
                                 <input class="form-control" type="time" name="hora" id="hora">
                             </div>
                         </div>
                         <div class="col-md-8">
                             <div class="form-group">
                                <label for="asunto">Asunto:</label>
                                <input class="form-control" type="text" name="asunto" id="asunto">
                             </div>
                         </div>
                        </div>
                        <div class="row">
                             <div class="col-md-12 text-center">
                              <button type="button" class="btn btn-primary btnAddCita">Generar cita</button>
                            </div>
                        </div>
                 </div>
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
					<label for="selectCancelar">Motivo de cancelación</label>
					<select class="form-control" id="selectCancelar">
					     <option value="No se presento">No se presento</option>
						 <option value="Llego tarde a la cita">Llego tarde a la cita</option>
                         <option value="Imprevisto por parte de la doctora">Imprevisto por parte de la doctora</option>
					</select>
                 </div>
                 <div class="form-group text-center">
                    <button type="button" class="btn btn-primary btnCancelarC" data-dismiss="modal">Aceptar</button>
                 </div>
            </div>
          </div>
        </div>
      </div>

@endsection
@section('script')
<script type="text/javascript" src="/js/citasAdmin.js"></script>
@endsection
