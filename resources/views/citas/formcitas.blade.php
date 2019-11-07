@extends('layouts.base')
@section('content')
<section class="container">
    <div class="tratamientosd">
        <div class="row">
            <div class="col-md-12">
                <h1>Haz tu cita de manera rápida y segura</h1>
            </div>
        </div>
    </div>
</section>
<section class="container mt-5 mb-5">
    <div class="formulario">
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <div class="card form-card">
                        <div class="card-header card-encabezado">
                            <div class="row d-flex justify-content-between">
                                <span class="text-cardh">Agenda una cita</span>
                                <img src="/img/icono-calendar.png" class="icono-calendar" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                 <input type="telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <label for="fecha">Fecha:</label>
                                        <input type="date" name="fecha" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hora">Hora:</label>
                                         <input type="time" name="hora" class="form-control">
                                    </div>
                                </div>
                             </div>
                             <div class="form-group">
                                <label for="comentarios">Comentarios</label>
                                 <textarea class="form-control" id="comentarios" rows="3"></textarea>
                             </div>
                             <div class="form-group text-center">
                                <button class="btn btn-primary form-control" style="width:50%;"><b>Agendar</b></button>
                             </div>
                         </div>
                     </div>
                </form>
            </div>
            <div class="col-md-6">
                    <img src="/img/imgform.png" alt="imagenform">
            </div>
        </div>
    </div>
</section>
@endsection