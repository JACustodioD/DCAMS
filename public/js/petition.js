$(document).ready(function(){
	$('.btnAttended').click(function(){
		$('.btnConfirm').attr('petition',$(this).attr('petition'));
	});

	$('.btnConfirm').click(function(){
		let petition  = $(this).attr('petition');
		 $.post('/consultorio/peticionvista',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                'petition': petition

            }, function(data) {
            	$('.'+petition).remove();

            	if($('.cont-petition').length == 0){
          			addVacio();
            	}
            });
	});

	$('.close').click(function(){
		$('.btnRemove').attr('petition',$(this).attr('petition'));
	});

	$('.btnRemove').click(function(){
		let petition  = $(this).attr('petition');
		 $.post('/consultorio/borrarpeticion',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                'petition': petition

            }, function(data) {
            	$('.'+petition).remove();
            	if($('.cont-petition').length == 0){
            		addVacio();
            	}
            });
	});

	function addVacio(){
		var vacio = ''+
		'<div class="container mt-5">'+
			 '<div class="row">'+
				 '<div class="col-md-12 text-center">'+
					 '<figure class="figure">'+
						 '<img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">'+
						 '<figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Ya no tienes más peticiones de citas.</h4>  </figcaption>'+
					 '</figure>'+
				 '</div>'+
			 '</div>'+
	 '</div>' ;
			$(".titulo").remove();
		$(".petition").append(vacio);
	}
});
