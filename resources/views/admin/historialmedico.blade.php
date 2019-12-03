@extends('layouts.admin')

@section('content')
<div class="container mt-3">
	<div class="paciente-trat">
		<div class="row ">
			<div class="col-md-8"> 
				@foreach ($users as $user)
                <h5 class="text-info nombrePaciente" paciente="{{$user->id}}">Pacientes / Tratamientos <b>
                    {{$user->name}}</b>
                </h5>
                 @endforeach
            </div>
            <div class="col-md-4">
                <button class="btn btn-danger btnHabilitar">Habilitar historia</button>
            </div>
		</div>
	</div>
</div>
@if(sizeOf($padecimientos)>0)
<div class="container mt-3">
    <div class="historia">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-md-12">
                    <h3>Historia médica</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <h5 class="text-info">Historia médica dental</h5>
                        @foreach ($padecimientos as $padecimiento)
                            @if (strcmp($padecimiento->category,'Dental')==0)
                                <li>{{ $padecimiento->description }}</li>  
                            @endif  
                        @endforeach <br>
                        <h5 class="text-info">Historia médica general</h5>
                        @foreach ($padecimientos as $padecimiento)
                            @if (strcmp($padecimiento->category,'General')==0)
                                <li>{{ $padecimiento->description }}</li>  
                            @endif  
                        @endforeach <br>
                        <h5 class="text-info">Observaciones</h5>
                        @foreach ($padecimientos as $padecimiento)
                            @if (strcmp($padecimiento->category,'Observaciones')==0)
                                <li>{{ $padecimiento->description }}</li>  
                            @endif  
                        @endforeach
                    </ul> 
                </div>
            </div>
            
        </div>
    </div>
</div>
@else
<div class="container mt-5">
    <div class="row">
           <div class="col-md-12 text-center">
              <figure class="figure">
                 <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
                  <figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Esté usuario aún no tiene historia medica.</h4>  </figcaption>
               </figure>   
           </div>
     </div> 
</div>
@endif
@endsection

@section('script')
<script type="text/javascript" src="/js/historiamedica.js"></script>
@endsection