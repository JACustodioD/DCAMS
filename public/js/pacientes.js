$(document).ready(function(){


    /* CODIGO PARA BUSCAR PACIENTE */

    $(document).on('keyup','#nombre',function(){
        var token = $("meta[name='csrf-token']").attr("content");
        var nombre = $(this).val();
        if(nombre.length==0){
            $.post('/consultorio/mostrarusuario',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "paciente": nombre,
            }, function(data) {
                $('#pacientes').children().remove();

                   for (var i = 0; i <= data.length - 1; i++) {
                        $("#pacientes").append(''+
                            '<div class="col-md-4" >'+
                            '<div class="card border-primary mb-3">'+
                            '<div class="card">'+
                            '<img src="/perfil/'+ data[i].image+'" class="card-img-top img-paciente mt-2">'+
                            '<div class="card-body">'+
                            '<div class="text-center">'+
                            '<h5 class="card-title text-primary">'+data[i].name+'</h5>'+
                            '<h6 class="card-subtitle mb-2 text-muted">Paciente desde: '+data[i].created_at +'</h6>'+
                            '<form action="/consultorio/tratamientos" method="POST">'+
                            '<input type="text" name="_token" hidden value="'+token+'">'+
                            '<input type="text" name="paciente" hidden value="'+data[i].id+'">'+
                            '<button  class="btn btn-outline-secondary btn-block mb-1 btnTratamientos" type="submit">Ver tratamientos</button>'+
                            '</form>'+
                            '<button class="btn btn-outline-secondary btn-block mb-1" patient="'+data[i].id+'">Ver Historia médica</button>'+
                            '<button class="btn btn-outline-secondary  btn-block mb-1" patient="'+data[i].id+'">Crear nueva cita</button>'+
                            '</div>'+
                            ' <p class="text-danger card-link btnEliminarP" patient="'+data[i].id+'" data-toggle="modal" data-target="#exampleModal1"> Eliminar paciente</p>'+
                            '</div> </div> </div>');
                    }     
            
            }); 
       }else{
            $.post('/consultorio/buscarusuario',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "paciente": nombre,
            }, function(data) {
                $('#pacientes').children().remove();
                if (data.length == 0) {
                    $("#pacientes").append(''+
                        '<div class="col-md-12" >'+
                        '<div class="text-center">'+
                        '<h5 class="text-primary"> No se encontro ningun usuario con ese nombre </h5>'+
                        '</div> </div> ');
                }else{
                    for (var i = 0; i <= data.length - 1; i++) {
                        $("#pacientes").append(''+
                            '<div class="col-md-4 '+data[i].id+' cont-pacientes>'+
                            '<div class="card border-primary mb-3">'+
                            '<div class="card">'+
                            '<img src="/perfil/'+ data[i].image+'" class="card-img-top img-paciente mt-2">'+
                            '<div class="card-body">'+
                            '<div class="text-center">'+
                            '<h5 class="card-title text-primary">'+data[i].name+'</h5>'+
                            '<h6 class="card-subtitle mb-2 text-muted">Paciente desde: '+data[i].created_at +'</h6>'+
                            '<form action="/consultorio/tratamientos" method="POST">'+
                            '<input type="text" name="_token" hidden value="'+token+'">'+
                            '<input type="text" name="paciente" hidden value="'+data[i].id+'">'+
                            '<button  class="btn btn-outline-secondary btn-block mb-1 btnTratamientos" type="submit">Ver tratamientos</button>'+
                            '</form>'+
                            '<button class="btn btn-outline-secondary btn-block mb-1" patient="'+data[i].id+'">Ver Historia médica</button>'+
                            '<button class="btn btn-outline-secondary  btn-block mb-1" patient="'+data[i].id+'">Crear nueva cita</button>'+
                            '</div>'+
                            ' <p class="text-danger card-link btnEliminarP" patient="'+data[i].id+'" data-toggle="modal" data-target="#exampleModal1"> Eliminar paciente</p>'+
                            '</div> </div> </div>');
                    }
                }
            });
       }
       
    });
    /* FIN CODIGO PARA BUSCAR PACIENTE */

    /* CODIGO PARA ELIMAR PACIENTE */
    $(document).on('click','.btnEliminarP',function(){
        $('.btnBorrarP').attr('patient',$(this).attr('patient'));
    });
    $(document).on('click','.btnBorrarP',function(){
        var paciente  = $(this).attr('patient');
        $.post('/consultorio/borrarpaciente',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                'paciente': paciente
                
        }, function(data) {
                $('.'+paciente).remove();
                if($('.cont-pacientes').length == 0){
                    var vacio = ''+
                     '<div class="container mt-5">'+
                     '<div class="row">'+
                     '<div class="col-md-12 text-center">'+
                     '<figure class="figure">'+
                     '<img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">'+
                     '<figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Ya no tienes más pacientes.</h4>  </figcaption>'+
                     '</figure> </div> </div> </div>';
                    $(".titulo").remove(); 
                    $(".pacientes").append(vacio);
                }
            });
    });
    /*FIN DEL CODIGO PARA ELIMINAR PACIENTE */


    /*Codigo para mostrar trataminetos*/
  /*$(document).on('click','.btnTratamientos',function(){
    var paciente = $(this).attr('patient');
    $.post('/consultorio/tratamientos',{
        "_token": $("meta[name='csrf-token']").attr("content"),
        "paciente": nombre,
    }, function(data,) {
        /*optional stuff to do after success */
    /*});
    alert($(this).attr('patient'));
  });*/

    /* Fin de codigo para mostrar tratamientoss*/

});

