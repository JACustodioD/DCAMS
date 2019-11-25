@extends('layouts.admin')

@section('content')
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
                     <form class="form-inline">
                         <input class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search">
                         <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                     </form>
                 </nav>
            </div>
         </div>
         <div class="row mt-5 shadow-sm p-3 mb-5 bg-white rounded">
             <div class="col-md-4">
                 <div class="card border-primary mb-3">
                     <div class="card">
                         <img src="/img/sol.jpg" class="card-img-top img-paciente mt-2">
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title text-primary">Marisol Mondragón</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Paciente desde: 13/02/2019</h6>
                            
                                <button  class="btn btn-outline-secondary btn-block mb-1">Ver tratamientos</button>
                                <button class="btn btn-outline-secondary btn-block mb-1">Ver Historia médica</button>
                                <button class="btn btn-outline-secondary btn-block mb-1">Ver Historial de pagos</button>
                                <button class="btn btn-outline-secondary  btn-block mb-1">Crear nueva cita</button>
                             </div>
                             <a href="#" class="card-link"> <p class="text-danger"> Eliminar paciente</p></a>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
    </div>
@endsection