@extends('layouts.user')
@section('content')
 @if(sizeOf($payments)>0)
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

                @foreach ($payments as $payment)
                @if($payment->treatmentStatus === 'Active')
                <div class="col-md-4">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h3 class="card-title text-primary text-center">{{$payment->serviceName}}</h3>
                          </div>
                          <ul class="list-group list-group-flush">
                             <li class="list-group-item">
                               <b>Costo del tratamiento:</b>
                               <br> ${{ number_format($payment->cost,2) }}
                             </li>
                             <li class="list-group-item">
                               <b>Restante:</b>
                               ${{ number_format($payment->total,2) }}
                             </li>
                             <li class="list-group-item">
                               <b>Liquidar antes del:</b>
                               <br> {{date('d/m/Y',strtotime($payment->endDate)) }}
                             </li>

                          </ul>
                             <div class="card-body text-center">
                                <button type="button" class="btn btn-primary btnDetalles" tratamiento="{{$payment->id}}">
                                    Ver detalles
                                </button>
                             </div>
                     </div>
                </div>
                  @endif
                @endforeach
            </div>
        </div>
    </div>
     @else
         <div class="container mt-3">
             <div class="row">
                 <div class="col-md-12 text-center">
                      <figure class="figure">
                             <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
                              <figcaption class="figure-caption"> <h2 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Aún no tienes historial de pagos.</h2>  </figcaption>

                            </figure>
                        </div>
                 </div>
         </div>

                @endif

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
                                                    <th scope="col">Observación</th>
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
                date = data[i].created_at.split(' ');
                date2 = date[0].split('-').reverse().join('/');
            			row =''+
            			'<tr class="listaPagos">'+
                    	'<th scope="row">'+date2+'</th>'+
                    	'<td>$'+new Intl.NumberFormat("en-IN").format(data[i].credit)+'</td>'+
                      '<td>'+data[i].observation+'</td>'+
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
                },100);



           });
        });

        $(".close").click(function(){
        	setTimeout(function(){
                    $(".modal").fadeOut(1500);
                    $('.listaPagos').remove();
            },100);
        });
    });
</script>
@endsection
