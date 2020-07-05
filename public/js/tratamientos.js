$(document).ready(function(){

    const token = $("meta[name='csrf-token']").attr("content"); 

    /**  change values of new treatment */
    $(document).on('change','.selectServicio',function(){
        let service = $(this).val();
        $.post('/consultorio/servicio',{
            "_token": token,
            "servicio": service,
        }, function(data) {
            $("#serviceDescription").text(data.serviceDescription);
            $("#serviceCost").val(data.cost);

        });

    });
   /** end change values of new treatment */


   /** add treatment */
   $(document).on('click','.btnAgregarT',function(){
       const patient = $(".nombrePaciente").attr('paciente');
       const service = $("#selectServicio").val();
       const endDate = $("#endDate").val();
       const startDate = $("#startDate").val();

       if(endDate.length <= 0 || startDate.length <= 0) {
           alert("Completa los campos de fechas");
       } else {

        $.post('/consultorio/agregartratamiento',{
            "_token": token,
            "service": service,
            "endDate": endDate,
            "startDate": startDate,
            "patient": patient,
        }, function(data) { 
            if(data.response) {
                alert(data.message);
				
			} else {

                let contenido = `
                    <div class="row ${data.treatment[0].id_treatment} cont-tratamientos">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tratamiento:</label>
                    <p> ${data.treatment[0].name} </p>
                    </div> </div>
                    <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Costo:</label>
                    <p> ${data.treatment[0].cost} </p>
                    </div>  </div>
                    <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1" >Fecha de inicio:</label>
                    <p> ${data.treatment[0].startDate} </p>
                    </div>  </div>
                    <div class="col-md-2">
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Fecha de término:</label>
                    <p> ${data.treatment[0].endDate} </p>
                    </div> </div> </div>
                    <div class="row ${data.treatment[0].id_treatment} ">
                    <div class="col-md-12 text-center">
                    <button class="btn btn-light finTratamiento" tratamiento = " ${data.treatment[0].id_treatment} " namet = "${data.treatment[0].name} "  data-toggle="modal" data-target="#exampleModalLong1">Finalizar tratamiento</button>
                    <button type="button" class="btn btn-light btnDetalles" data-toggle="modal" data-target="#exampleModalLong" tratamiento = "${data.treatment[0].id_treatment}" namet = "${data.treatment[0].name} ">Ver pagos</button>
                    <button type="button" class="btn btn-primary btnAddPago"  data-toggle="modal"  data-target="#agregarpago" tratamiento = " ${data.treatment[0].id_treatment} " namet = "${data.treatment[0].name} ">Agregar pago</button>
                    </div>  </div> `;

                alert(data.message);
                $('.ups').remove();
                $('.cont-tratamineto').append(contenido);
        		
			}
          });
       }
   });
    /** end add treatment */


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
        $('.listaPagos').remove();
        $('.modal-title').text($(this).attr('nameT'));
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
           });
        });

    /* FIN CODIGO PARA VER PAGOS */

    /* CODIGO PARA AGREGAR PAGO */
    $(document).on('click','.btnAddPago',function(){
        $('.btnAdd').attr('tratamiento',$(this).attr('tratamiento'));
        $('.modal-title').text($(this).attr('nameT'));
    });

    $(document).on('click','.btnAdd',function(){
        var usuario = $(".nombrePaciente").attr('paciente',);
        var tratamiento = $(this).attr('tratamiento');
        var cantidad = $("#cantidad").val();
        var fecha = $('#fechaPago').val();

        if (cantidad.length == 0 || fecha.length == 0) {
            alert("Completa los campos");
        }else{
            if (/^([0-9])*$/.test(cantidad)) {
               $.post('/consultorio/hacerpago',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "tratamiento": tratamiento,
                "cantidad" : cantidad,
        }, function(data) {
            alert("Pago completado");
        });
            }else{
                alert("El campo cantidad solo debe contener números");
            }
        }
    });
    /* FIN CODIGO PARA AGREGAR PAGO */
}); 