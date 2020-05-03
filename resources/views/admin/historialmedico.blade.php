@extends('layouts.admin')

@section('content')
<div class="container mt-3">
	<div class="paciente-trat">
		<div class="row ">
			<div class="col-md-8">
				@foreach ($patients as $patient)
                <h5 class="text-info patientName" patient="{{$patient->id}}">Pacientes / Historia médica <b>
                    {{$patient->fullName}}</b>
                </h5>
                 @endforeach
            </div>
            <div class="col-md-4">
                <button class="btn btn-danger btnEnabled">Habilitar historia</button>
            </div>
		</div>
	</div>
</div>
@if(sizeOf($sfferings)>0)
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
                        @foreach ($sfferings as $sffering)
                            @if (strcmp($sffering->sfferingCategory,'hdental')==0)
                                <li>{{ $sffering->sfferingDescription }}</li>
                            @endif
                        @endforeach <br>
                        <h5 class="text-info">Historia médica general</h5>
                        @foreach ($sfferings as $sffering)
                            @if (strcmp($sffering->sfferingCategory,'hgeneral')==0)
                                <li>{{ $sffering->sfferingDescription }}</li>
                            @endif
                        @endforeach <br>
                        <h5 class="text-info">Observaciones</h5>
                        @foreach ($sfferings as $sffering)
                            @if (strcmp($sffering->sfferingCategory,'observ')==0)
                                <li>{{ $sffering->sfferingDescription }}</li>
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
