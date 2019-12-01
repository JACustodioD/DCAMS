@extends('layouts.admin')

@section('content')
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
                        <form class="form-inline">
                             <input class="form-control mr-sm-2" type="search" placeholder="Paciente" aria-label="Search">
                             <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                         </form>
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
                    <tbody>
                      <tr>
                        <th scope="row"><p>...</p></th>
                        <td><p>...</p></td>
                        <td><p>...</p></td>
                        <td><p>...</p></td>
                      </tr>
                      <tr>
            
                    </tbody>
                  </table>
    </div>
</div>

@endsection