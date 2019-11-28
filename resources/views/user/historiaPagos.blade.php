@extends('layouts.user')
@section('content')
    <div class="container mt-3">
        <div class="pagos">
            <div class="row">
                <div class="col-md-6">
                    <h1>Historial de Pagos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p> Todo el historial de pagos de sus tratamientos los encontrará aquí. </p>
                </div>
            </div>
        </div>
        <hr width="100%">
    </div>
   
    <div  class="container mb-3">
        <div class="historial">
            <div class="row">
                @if(sizeOf($payments)>0)
                @foreach ($payments as $payment)
                <div class="col-md-4">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h3 class="card-title text-primary text-center">{{$payment->name}}</h3>
                          </div>
                          <ul class="list-group list-group-flush">
                             <li class="list-group-item"><b>Costo inicio:</b> $ {{$payment->cost}} </li>
                             <li class="list-group-item"><b>Restante:</b> ${{ $payment->total }}</li>
                             <li class="list-group-item"><b>Liquidar antes de:</b> {{$payment->endDate}} </li>
                             <li class="list-group-item"><b>Cantidad:</b> ${{$payment->id_treatment}} </li>
                           
                          </ul>
                             <div class="card-body text-center">
                                <button type="button" class="btn btn-primary btnDetalles" tratamiento="{{$payment->id_treatment}}">
                                    Ver detalles
                                </button>
                             </div>
                     </div>
                </div>

                @endforeach

                @else
                <h1>nO HAY NOTHING</h1>
                @endif
            </div>
        </div>
    </div>

<!--MODAL DE HISTORIAL DE PAGOS-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Modal -->
                            <div class="modal " id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="modalPagos" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="modalPagos">Detalle de pagos anteriores:</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Fecha</th>
                                                    <th scope="col">Cantidad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.btnDetalles').click(function(){
           table = $('.table').children('tbody');
            $.post('/pacientes/historialdepagos',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "tratamientos": $(this).attr('tratamiento'),
            }, function(data) {
            	if(data.length>0){
					for (var i = 0; i <= data.length-1; i++) {
            			row =''+
            			'<tr class="listaPagos">'+
                    	'<th scope="row">'+data[i].created_at+'</th>'+
                    	'<td>$'+data[i].credit+'</td>'+
                    	'</tr>';
                    	table.append(row);
            		}
            	}else{
            		row = ''+
            		'<tr class="listaPagos">'+
            		'<td scope="row" class="text-danger text-center" colspan="2">No hay pagos</td>'+
            		'</tr>';
            		table.append(row);
            	}
                setTimeout(function(){ 
                    $(".modal").fadeIn(1500);
                },300);

                

           });
        });

        $(".close").click(function(){
        	setTimeout(function(){ 
                    $(".modal").fadeOut(1500);
                    $('.listaPagos').remove();
            },300);
        });
    });
</script>
@endsection
