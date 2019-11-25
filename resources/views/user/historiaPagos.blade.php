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
                <div class="col-md-4">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h3 class="card-title text-primary text-center">Tratamiento de brakets</h3>
                          </div>
                          <ul class="list-group list-group-flush">
                             <li class="list-group-item"><b>Costo inicio:</b> $ 15,200.00 </li>
                             <li class="list-group-item"><b>Restante:</b> $ 14,900.00 </li>
                             <li class="list-group-item"><b>Último pago:</b> 13/10/2019 </li>
                             <li class="list-group-item"><b>Cantidad:</b> $300.00 </li>
                           
                          </ul>
                             <div class="card-body text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                    Ver detalles
                                </button>
                             </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!--MODAL DE HISTORIAL DE PAGOS-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Detalle de pagos anteriores:</h5>
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
                                    <tr>
                                    <th scope="row">23/04/2019</th>
                                    <td>$ 100</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">10/05/2019</th>
                                    <td>$ 200</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">15/05/2019</th>
                                    <td>$ 300</td> 
                                    </tr>
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
