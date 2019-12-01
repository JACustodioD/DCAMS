$(document).ready(function(){

	$('#nombre').keyup(function(){
		var nombre = $("#nombre").val(); 
		if (nombre.length == 0) {
			$.post('/consultorio/buscarusuario',{
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
                            '<button  class="btn btn-outline-secondary btn-block mb-1">Ver tratamientos</button>'+
                            '<button class="btn btn-outline-secondary btn-block mb-1">Ver Historia médica</button>'+
                            '<button class="btn btn-outline-secondary  btn-block mb-1">Crear nueva cita</button>'+
                            '</div>'+
                            '<a href="#" class="card-link"> <p class="text-danger"> Eliminar paciente</p></a>'+
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
    						'<div class="col-md-4" >'+
                 			'<div class="card border-primary mb-3">'+
                     		'<div class="card">'+
                         	'<img src="/perfil/'+ data[i].image+'" class="card-img-top img-paciente mt-2">'+
                        	'<div class="card-body">'+
                            '<div class="text-center">'+
                            '<h5 class="card-title text-primary">'+data[i].name+'</h5>'+
                            '<h6 class="card-subtitle mb-2 text-muted">Paciente desde: '+data[i].created_at +'</h6>'+
                            '<button  class="btn btn-outline-secondary btn-block mb-1">Ver tratamientos</button>'+
                            '<button class="btn btn-outline-secondary btn-block mb-1">Ver Historia médica</button>'+
                            '<button class="btn btn-outline-secondary  btn-block mb-1">Crear nueva cita</button>'+
                            '</div>'+
                            '<a href="#" class="card-link"> <p class="text-danger"> Eliminar paciente</p></a>'+
                        	'</div> </div> </div>');
    				}
    				
    			}
    			
    		
    		});	
		}

    	
	});

});