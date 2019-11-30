@extends('layouts.admin')

@section('content')
@if(sizeOf($messages)>0)
<div class="container mt-3">
	<div class="mensaje">
		<div class="row">
			<div class="col-md-6">
				<h1>Mis mensajes</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">

	@foreach ($messages as $message)
	<div class="cont-mensaje">
			<button type="button" class="close mb-2" aria-label="Close">
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
				<p>{{ $message->date}} | {{ $message->hour }}</p>
			</div>
			<div class="col-md-2">
				<button class="btn btn-danger">Atendido</button>
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

@endsection