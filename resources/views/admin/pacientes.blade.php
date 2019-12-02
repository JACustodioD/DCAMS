@extends('layouts.admin')

@section('content')
@if(sizeOf($patients)>0)
 <div class="container mt-3" >
     <div class="pacientes">
         <div class="row">
             <div class="col-md-6">
                 <h1 class="titulo">Mis pacientes</h1>
             </div>
         </div>
         <div class="row titulo">
            <div class="col-md-12">
                 <nav class="navbar navbar-light bg-light">
                     <a class="navbar-brand">Buscar paciente</a>
                     <div class="form-inline">
                         <input class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search" id="nombre" >
                         <button class="btn btn-outline-primary my-2 my-sm-0 btnBuscar">Buscar</button>
                     </div>
                 </nav>
            </div>
         </div>
         <div class="row mt-5 shadow-sm p-3 mb-5 bg-white rounded" id="pacientes">
            @foreach ($patients as $patient)
             <div class="col-md-4 {{$patient->id}} cont-pacientes">
                 <div class="card border-primary mb-3">
                     <div class="card">
                         <img src="/perfil/{{ $patient->image }}" class="card-img-top img-paciente mt-2">
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title text-primary">{{ $patient->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Paciente desde: {{ $patient->created_at }}</h6>
                                <form action="/consultorio/tratamientos" method="POST">
                                  @csrf
                                  <input type="text" name="paciente" hidden value="{{$patient->id}}">
                                   <button  class="btn btn-outline-secondary btn-block mb-1 btnTratamientos" type="submit">Ver tratamientos</button>
                                </form>
                               
                                <button class="btn btn-outline-secondary btn-block mb-1" patient="{{$patient->id}}">Ver Historia médica</button>
                                <button class="btn btn-outline-secondary  btn-block mb-1" patient="{{$patient->id}}">Crear nueva cita</button>
                             </div>
                             <p class="text-danger card-link btnEliminarP" patient="{{$patient->id}}" data-toggle="modal" data-target="#exampleModal1"> Eliminar paciente</p>
                        </div>
                    </div>
                 </div>
             </div>
                @endforeach
         </div>
      
    </div>
    @else

<div class="container mt-5">
    <div class="row">
           <div class="col-md-12 text-center">
              <figure class="figure">
                 <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
                  <figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Aún no tienes pacientes.</h4>  </figcaption>
               </figure>   
           </div>
     </div> 
</div>


@endif


<!-- MODAL PARA CONFIRMAR QUE SE ELIMINARA PACIENTE -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro que desea eliminar este paciente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btnBorrarP" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- /FIN DE MODAL-->
@endsection

@section('script')
<script type="text/javascript" src="/js/pacientes.js"></script>
@endsection