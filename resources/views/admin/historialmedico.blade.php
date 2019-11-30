@extends('layouts.admin')

@section('content')
<div class="container mt-3">
	<div class="paciente-trat">
		<div class="row ">
			<div class="col-md-8">
				<h5 class="text-info">Pacientes / Historial médico <b> (Nombre paciente) </b></h5>
            </div>
            <div class="col-md-4">
                <button class="btn btn-danger">Habilitar historia</button>
            </div>
		</div>
	</div>
</div>
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
                        <li>Padecimiento</li>
                        <li>Padecimiento</li>
                        <li>Padecimiento</li> <br>
                        <h5 class="text-info">Historia médica general</h5>
                         <li>Padecimiento</li>
                        <li>Padecimiento</li>
                        <li>Padecimiento</li> <br>
                        <h5 class="text-info">Observaciones</h5>
                        <li>Padecimiento</li>
                        <li>Padecimiento</li>
                        <li>Padecimiento</li>
                     </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection