$(document).ready(function(){
	   /*CODIGO PARA AUTOCOMPLETAR TRATAMIENTO*/
    $(document).on('change','.selectServicio',function(){
       
        var servicio = $(this).val();
        $.post('/consultorio/servicio',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "servicio": servicio,
        }, function(data) {
            $("#detallesServicio").text(data.description);
            $("#costoServicio").val(data.cost);

        });
       
    });

    /*FIN CODIGO PARA AUTOCOMPLETAR TRATAMIENTO */


    /* CODIGO PARA AGREGAR TRATAMIENTO */
    $(document).on('click','.btnAgregarT',function(){
        var user = $(".nombrePaciente").attr('paciente');
        var servicio = $("#selctServicio").val();
        var costo = $("#costoServicio").val();
        var endDate = $("#endDate").val();
        var startDate = $("#startDate").val();
        if(endDate.length<=0 || startDate.length<=0){
            alert("Completa los campos de fecha");
        }else{
           $.post('/consultorio/agregartratamiento',{
              "_token": $("meta[name='csrf-token']").attr("content"),
              "servicio": servicio,
              "costo": costo,
              "endDate": endDate,
              "startDate": startDate,
              "user": user,
            }, function(treatment) {
              var contenido = ''+
                    '<div class="row '+treatment[0].id_treatment+'cont-tratamientos">'+
                    '<div class="col-md-6">'+
                    '<div class="form-group">'+
                    '<label for="exampleFormControlTextarea1">Tratamiento:</label>'+
                    '<p>'+treatment[0].name+'</p>'+
                    '</div> </div>'+
                    '<div class="col-md-2">'+
                    '<div class="form-group">'+
                    '<label for="exampleFormControlTextarea1">Costo:</label>'+
                    '<p>'+treatment[0].cost+'</p>'+
                    '</div>  </div>'+
                    '<div class="col-md-2">'+
                    '<div class="form-group">'+
                    '<label for="exampleFormControlTextarea1" >Fecha de inicio:</label>'+
                    '<p>'+treatment[0].startDate+'</p>'+
                    '</div>  </div>'+
                    '<div class="col-md-2">'+
                    '<div class="form-group">'+
                    '<label for="exampleFormControlTextarea1">Fecha de término:</label>'+
                    '<p>'+treatment[0].endDate+'</p>'+
                    '</div> </div> </div>'+
                    '<div class="row '+treatment[0].id_treatment+'">'+
                    '<div class="col-md-12 text-center">'+
                    '<button class="btn btn-light finTratamiento" tratamiento = "'+treatment[0].id_treatment+'" namet = "'+treatment[0].name+'"  data-toggle="modal" data-target="#exampleModalLong1">Finalizar tratamiento</button>'+
                    '<button type="button" class="btn btn-light btnDetalles" data-toggle="modal" data-target="#exampleModalLong" tratamiento = "'+treatment[0].id_treatment+'">Ver pagos</button>'+
                    '<button type="button" class="btn btn-primary"  data-toggle="modal"  data-target="#agregarpago">Agregar pago</button>'+
                    '</div>  </div>';
                $('.ups').remove();
                $('.cont-tratamineto').append(contenido);



            });
          
        }
    });
    /* FIN CODIGO PARA AGREGAR TRATAMIENTO */

    /* FINALIZAR TRATAMIENTO */
    $(document).on('click','.finTratamiento',function(){
        $('.btnBorrarT').attr('tratamiento',$(this).attr('tratamiento'));
        $('.modal-title').text($(this).attr('nameT'));
    });
    $(document).on('click','.btnBorrarT',function(){
        var usuario = $(".nombrePaciente").attr('paciente',);
        var tratamiento = $(this).attr('tratamiento');
        $.post('/consultorio/cancelartratamiento',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "tratamiento": tratamiento,
                "paciente": usuario, 
        }, function(data) {
            $("."+tratamiento).remove();
            if($('.cont-tratamientos').length == 0){
                    var vacio = ''+
                     '<div class="container mt-5 ups">'+
                     '<div class="row">'+
                     '<div class="col-md-12 text-center">'+
                     '<figure class="figure">'+
                     '<img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">'+
                     '<figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Ya no tiene más tratamientos.</h4>  </figcaption>'+
                     '</figure> </div> </div> </div>';
                    
                    $(".cont-tratamineto").append(vacio);
                }
        });
    });
    /* FIN FINALIZAR TRATAMIENTO */


    /* CODIGO PARA VER PAGOS */
    $(document).on('click','.btnDetalles',function(){
        var table = $('.tableV').children('tbody');
        $.post('/consultorio/historialdepagos',{
            "_token": $("meta[name='csrf-token']").attr("content"),
            "tratamientos": $(this).attr('tratamiento'),
            }, function(data) {
                if(data.length>0){
                    for (var i = 0; i <= data.length-1; i++) {
                        row =''+
                        '<tr class="listaPagos">'+
                        '<th scope="row">$ '+data[i].credit+'</th>'+
                        '<td>'+data[i].created_at+'</td>'+
                        '<td>$'+data[i].total+'</td>'+
                        '</tr>';
                        table.append(row);
                    }
                }else{
                    row = ''+
                    '<tr class="listaPagos">'+
                    '<td scope="row" class="text-danger text-center" colspan="3">No hay pagos</td>'+
                    '</tr>';
                    table.append(row);
                }

        $(".close").click(function(){
            $('.listaPagos').remove();
        });
                
           });
        });

    /* FIN CODIGO PARA VER PAGOS */
}); 