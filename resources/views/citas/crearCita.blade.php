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
                <form action="/cita" method="POST">
                    @csrf
                    <div class="card form-card">
                        <div class="card-header card-encabezado">
                            <div class="row d-flex justify-content-between">
                                <span class="text-cardh">Agenda una cita</span>
                                <img src="/img/icono-calendar.png" class="icono-calendar" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" required autofocus autocomplete value="{{ old('nombre')}}">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                 <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required autofocus autocomplete value="{{ old('telefono')}}">

                                 @error('telefono')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <label for="fecha">Fecha:</label>
                                        <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" required autofocus autocomplete value="{{old('fecha')}}">
                                        @error('fecha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hora">Hora:</label>
                                         <input type="time" name="hora" class="form-control @error('hora') is-invalid @enderror" required autofocus autocomplete value="{{old('hora')}}">
                                         @error('hora')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                    </div>
                                </div>
                             </div>
                             <div class="form-group">
                                <label for="comentarios">Comentarios</label>
                                 <textarea class="form-control @error('comentario') is-invalid @enderror" id="comentario" rows="3" name="comentario" required autofocus autocomplete >{{old('comentario')}}</textarea>

                                 @error('comentario')
                                 <span class="invalid-feedback" role="alert">
                                     <strong> {{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary form-control" style="width:50%;" autofocus><b>Agendar</b></button>
                             </div>
                         </div>
                     </div>
                </form>
            </div>
            <div class="col-md-6">
                    <img src="/img/imgform.png" alt="imagenform" class="img-fluid">
            </div>
        </div>
    </div>
</section>
@endsection