@extends('layouts.admin')

@section('content')
@if(sizeOf($patients)>0)
 <div class="container mt-3" >
     <div class="pacientes">
         <div class="row">
             <div class="col-md-6">
                 <h1>Mis pacientes</h1>
             </div>
         </div>
         <div class="row">
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
             <div class="col-md-4" >
                 <div class="card border-primary mb-3">
                     <div class="card">
                         <img src="/perfil/{{ $patient->image }}" class="card-img-top img-paciente mt-2">
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title text-primary">{{ $patient->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Paciente desde: {{ $patient->created_at }}</h6>
                            
                                <button  class="btn btn-outline-secondary btn-block mb-1">Ver tratamientos</button>
                                <button class="btn btn-outline-secondary btn-block mb-1">Ver Historia médica</button>
                                <button class="btn btn-outline-secondary  btn-block mb-1">Crear nueva cita</button>
                             </div>
                             <a href="#" class="card-link"> <p class="text-danger"> Eliminar paciente</p></a>
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
@endsection

@section('script')
<script type="text/javascript" src="/js/pacientes.js"></script>
@endsection