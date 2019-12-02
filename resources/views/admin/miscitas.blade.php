@extends('layouts.admin')
@section('content')
@if(sizeOf($citas)>0)
<div class="container mt-3">
    <div class="miscitas">
        <div class="row">
            <div class="col-md-12">
                <h1> Mis citas </h1>
            </div>
        </div>
        <div class="row">
             <div class="col-md-12">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand">Buscar cita</a>
                        <div class="form-inline">
                             <input class="form-control mr-sm-2" type="search" placeholder="Paciente" aria-label="Search" id="nombre">
                             <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                         </div>
                     </nav>
                </div>
             </div>
         </div>
</div>
<div class="container ">
    <div class="row mt-5 shadow-sm p-3 mb-5 bg-white rounded">
            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Paciente:</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">hora</th>
                        <th scope="col">Asunto</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">
                      @foreach ($citas as $cita)
                        <tr>
                          <th scope="row"><p>{{$cita->name}}</p></th>
                          <td><p>{{$cita->dateOfAppointment}}</p></td>
                          <td><p>{{$cita->hour}}</p></td>
                          <td><p>{{$cita->affair}}</p></td>
                        </tr>
                      @endforeach
            
                    </tbody>
            </table>
    </div>
</div>
@else
  <div class="container mt-5">
    <div class="row">
           <div class="col-md-12 text-center">
              <figure class="figure">
                 <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
                  <figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Aún no tienes citas.</h4>  </figcaption>
                </figure>   
            </div>
      </div> 
  </div>


@endif

@endsection
@section('script')
<script type="text/javascript" src="/js/citas.js"></script>
@endsection