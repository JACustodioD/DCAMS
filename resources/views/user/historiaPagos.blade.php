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
                             <li class="list-group-item"><b>Último pago:</b> {{$payment->paymentDate}} </li>
                             <li class="list-group-item"><b>Cantidad:</b> ${{$payment->credit}} </li>
                           
                          </ul>
                             <div class="card-body text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" class="btnDetalles" tratamiento = {{$payment->treatment }}>
                                    Ver detalles
                                </button>
                             </div>
                     </div>
                </div>

                @endforeach

                    <!--MODAL DE HISTORIAL DE PAGOS-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="modalPagos" aria-hidden="true">
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
                                            @foreach ($payments as $payment)
                                            @if($payment->treatment == $payment->id )
                                                <tr>
                                                    <th scope="row">{{$payment->paymentDate}}</th>
                                                    <td>$ {{ $payment->credit }}</td>
                                                </tr>
                                            @else
                                            <h1>no hay</h1>
                                            @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <h1>nO HAY NOTHING</h1>
                @endif
            </div>
        </div>
    </div>



    <script type="text/javascript">

        $(document).ready(function(){
            $(".btnDetaller").click(function(){
                var contenido = ''+
                
                var tratamiento = $(this).attr('tratamiento');
                 $('.modal-body').append(contenido);
            });
        });

   
    </script>

@endsection
