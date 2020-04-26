@extends('layouts.user')
@section('content')

@if(Auth::user()->history)
    <div class="container mt-5">
        <h4 class="text-primary">Ya ha completado su historial médico</h4>
       <div class="shadow p-3 mb-5 bg-white rounded">
            <ul>
                <h5 class="text-info">Historia médica dental</h5>
                @foreach ($historyList as $history)
                  @if (strcmp($history->sfferingCategory,'hdental')==0)
                    <li>{{ $history->sfferingDescription }}</li>
                  @endif
                @endforeach <br>
                <h5 class="text-info">Historia médica general</h5>
                @foreach ($historyList as $history)
                  @if (strcmp($history->sfferingCategory,'hgeneral')==0)
                    <li>{{ $history->sfferingDescription }}</li>
                  @endif
                @endforeach <br>
                <h5 class="text-info">Observaciones</h5>
                @foreach ($historyList as $history)
                  @if (strcmp($history->sfferingCategory,'observ')==0)
                    <li>{{ $history->sfferingDescription }}</li>
                  @endif
                @endforeach
            </ul>
       </div>
    </div>
@else
<div class="container mt-3">
    <div class="historia">
        <div class="row">
            <div class="col-md-6">
                <h1>Historia médica</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                 <p>Por favor llene su historial médico, su salud es importante para nosotros.</p>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="historia-dental">
        <form action="/pacientes/historiamedica" method="POST">
        	@csrf
        <table class="table table-hover">
                <tr>
                    <th scope="col" colspan="2" class="text-primary"><h3>Historia dental</h3></th>
                    <th scope="col" class="text-primary"><h3>Si</h3></th>
                    <th scope="col" class="text-primary"><h3>No</h3></th>

                  </tr>
                <tbody>

                  @foreach ($dentalList as $dentalInfo)
                    <tr>
                        <th scope="row" class="text-primary">{{ $item ++}}</th>
                        <td scope="col">¿{{ $dentalInfo->sfferingDescription }}?</td>
                        <td>
                        	<div class="form-check">
                                <input class="form-check-input" required type="radio" name="{{ $dentalInfo->id_sfferings }}" id="exampleRadios1" value="si" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                </label>
                            </div>
                         </td>
                        <td>
                          <div class="form-check">
                                <input class="form-check-input" required type="radio" name="{{ $dentalInfo->id_sfferings }}" id="exampleRadios2" value="no" checked>
                                <label class="form-check-label" for="exampleRadios2">
                                </label>
                            </div>
                         </td>
                    </tr>
                    @endforeach
                </tbody>
         </table>
    </div>
</div>
<!--TABLA HISTORIA MEDICA GENERAL-->
<div class="container mt-5">
        <div class="historia-gral">
            <table class="table table-hover">
                    <tr>
                        <th scope="col" colspan="2" class="text-info"><h3>Historia general</h3></th>
                        <th scope="col" class="text-info"><h3>Si</h3></th>
                        <th scope="col" class="text-info"><h3>No</h3></th>
                      </tr>
                    <tbody>
                      @foreach ($generalList as $generalInfo)
                        <tr>
                            <th scope="row" class="text-primary">{{ $item ++}}</th>
                            <td scope="col">¿{{ $generalInfo->sfferingDescription }}?</td>
                            <td>
                            	<div class="form-check">
                                    <input class="form-check-input" required type="radio" name="{{ $generalInfo->id_sfferings }}" id="exampleRadios1" value="si" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                    </label>
                                </div>
                             </td>
                            <td><div class="form-check">
                                    <input class="form-check-input" required type="radio" name="{{ $generalInfo->id_sfferings }}" id="exampleRadios2" value="no" checked>
                                    <label class="form-check-label" for="exampleRadios2">
                                    </label>
                                </div>
                             </td>
                        </tr>
                        @endforeach
                    </tbody>
             </table>
        </div>
    </div>
<!--APARTADO DE OVSERVACIONES-->
    <div class="container">
        <div class="observaciones">
            <div class="row">
                <div  class="col-md-12">
                    <h3 class="text-warning">Observaciones</h3> <br>
                    <p>Marque cuales de los siguientes padecimientos tiene:</p>
                </div>
            </div>
          <hr width="100%">
            <div class="row">
              @foreach ($observList as $observ)
                <div class="col-md-2">
                     <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="{{ $observ->id_sfferings }}" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>{{ $observ->sfferingDescription }}</small> </label>
                     </div>
                </div>
                @endforeach
            </div>
            <div class="row d-flex justify-content-center mb-3">
               <div class="col-md-6">
                   <button class="btn btn-primary btn-block">Guardar historia</button>
               </div>
            </div>
        </div>
   </div>
</form>

@endif
@endsection
