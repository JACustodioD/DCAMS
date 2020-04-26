$(document).ready(function(){
	$('.btnAtendio').click(function(){
		$('.btnAceptar').attr('mensaje',$(this).attr('mensaje'));
	});

	$('.btnAceptar').click(function(){
		var mensaje  = $(this).attr('mensaje');
		 $.post('/consultorio/atendido',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                'mensaje': mensaje
                
            }, function(data) {
            	$('.'+mensaje).remove();

            	if($('.cont-mensaje').length == 0){
            			var vacio = ''+
            		 '<div class="container mt-5">'+
					 '<div class="row">'+
          			 '<div class="col-md-12 text-center">'+
            		 '<figure class="figure">'+
                 	 '<img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">'+
                  	 '<figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Ya no tienes más mensajes.</h4>  </figcaption>'+
               		 '</figure> </div> </div> </div>';
               		 $(".titulo").remove(); 
            		$(".mensaje").append(vacio);
            	}
            });
	});

	$('.close').click(function(){
		$('.btnEliminar').attr('mensaje',$(this).attr('mensaje'));
	});

	$('.btnEliminar').click(function(){
		var mensaje  = $(this).attr('mensaje');
		 $.post('/consultorio/borrarmensaje',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                'mensaje': mensaje
                
            }, function(data) {
            	$('.'+mensaje).remove();
            	if($('.cont-mensaje').length == 0){
            		var vacio = ''+
            		 '<div class="container mt-5">'+
					 '<div class="row">'+
          			 '<div class="col-md-12 text-center">'+
            		 '<figure class="figure">'+
                 	 '<img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">'+
                  	 '<figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Ya no tienes más mensajes.</h4>  </figcaption>'+
               		 '</figure> </div> </div> </div>';
               		$(".titulo").remove(); 
            		$(".mensaje").append(vacio);
            	}
            });
	});
});