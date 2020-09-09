    /* CODIGO PARA BUSCAR PACIENTE */
    $('#nombre').keyup(function(){
        var nombre = $("#nombre").val(); 
        if (nombre.length == 0) {
            $.post('/consultorio/mostrarcitas',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "empty": 1,
            }, function(data) {

                $('#tbody').children().remove();

                    for (var i = 0; i <= data.length - 1; i++) {
                        $("#tbody").append(''+
                            '<tr>'+
                            '<th scope="row"><p>'+data[i].fullName+'</p></th>'+
                            '<td><p>'+data[i].dateOfAppointment+'</p></td>'+
                            '<td><p>'+data[i].hour+'</p></td>'+
                            '<td><p>'+data[i].affair+'</p></td>'+
                            '</tr>');
                    }
               
            
            }); 
        }else{
            $.post('/consultorio/buscarcitas',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "paciente": nombre,
            }, function(data) {

                $('#tbody').children().remove();

                if (data.length == 0) {
                    $("#tbody").append(''+
                        '<tr>'+
                        '<td colspan="4" class="text-center">'+
                        '<h5 class="text-primary"> No se encontro ningun usuario con ese nombre </h5>'+
                        '</td> </tr> ');
                }else{
                    for (var i = 0; i <= data.length - 1; i++) {
                        $("#tbody").append(''+
                           '<tr>'+
                            '<th scope="row"><p>'+data[i].fullName+'</p></th>'+
                            '<td><p>'+data[i].dateOfAppointment+'</p></td>'+
                            '<td><p>'+data[i].hour+'</p></td>'+
                            '<td><p>'+data[i].affair+'</p></td>'+
                            '</tr>');
                    }
                    
                }
                
            
            }); 
        }   
    });
    /* FIN CODIGO PARA BUSCAR PACIENTE */