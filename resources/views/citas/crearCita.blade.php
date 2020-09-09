@extends('layouts.app')
@section('content')
<section class="container-fluid">
    <div class="formulario">
        <div class="row">
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                   <a href="/"> <img src="/img/icono-dental.png" alt="" height="120" width="120" class="mb-5"></a>
                </div>
            </div>
                <form action="/cita" method="POST">
                    @csrf
                    <div class="card form-card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre">Nombre completo:</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" required autofocus autocomplete value="{{ old('nombre')}}">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
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
                                        <label for="fecha">Fecha (deseada):</label>
                                        <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" required autofocus autocomplete value="{{old('fecha')}}">
                                        @error('fecha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hora">Hora (deseada):</label>
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
                                 <textarea class="form-control @error('comentario') is-invalid @enderror" id="comentario" rows="1" name="comentario" required autofocus autocomplete >{{old('comentario')}}</textarea>

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
            <div class="col-md-6 col-login d-flex align-items-center">
                 <h1 class=" text-image-login display-4 text-center">Agenda una cita <br> ¡hoy mismo!</h1> 
             </div>
        </div>
    </div>
</section>
@endsection