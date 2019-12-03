@extends('layouts.admin')

@section('content')
@if(sizeOf($messages)>0)
<div class="container mt-3">
	<div class="mensaje">
		<div class="row">
			<div class="col-md-6 titulo">
				<h1>Mis mensajes</h1>
			</div> 
		</div>
	</div>
</div>
<div class="container">

	@foreach ($messages as $message)
	<div class="cont-mensaje {{$message->id}}">
			<button type="button" class="close mb-2" aria-label="Close" mensaje="{{ $message->id}}" data-toggle="modal" data-target="#exampleModal1">
					<span aria-hidden="true">&times;</span>
			</button>
		<div class="row shadow-sm p-3 mb-5 bg-white rounded">
			<div class="col-md-3">	
				<p>{{ $message->name }}</p>		
			</div>
			<div class="col-md-3">
				<p> {{ $message->commentary }} </p>
			</div>
			<div class="col-md-2">
				<p>{{ $message->phone }}</p>
			</div>
			<div class="col-md-2">
				<p>{{date('d-m-Y',strtotime($message->date)) }}| {{ $message->hour }}</p>
			</div>
			<div class="col-md-2">
				<button class="btn btn-danger btnAtendio" mensaje="{{ $message->id}}" data-toggle="modal" data-target="#exampleModal">Atendido</button>
			</div>
		</div>
	</div>
	@endforeach

</div>

@else

<div class="container mt-5">
	<div class="row">
           <div class="col-md-12 text-center">
              <figure class="figure">
                 <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
                  <figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Aún no tienes mensajes.</h4>  </figcaption>
               </figure>   
           </div>
     </div>	
</div>


@endif


<!-- MODAL PARA CONFIRMAR QUE SE ATENDIO -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Marcar como atendido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro que desea marcar este mensaje como atendido?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btnAceptar" data-dismiss="modal" autofocus="">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- /FIN DE MODAL-->

<!-- MODAL PARA CONFIRMAR QUE SE ELIMINARA -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro que desea eliminar este mensaje?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btnEliminar" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- /FIN DE MODAL-->

@endsection  

@section('script')
<script type="text/javascript" src="/js/message.js"></script>
@endsection
