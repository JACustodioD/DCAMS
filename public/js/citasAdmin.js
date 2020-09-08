$(document).ready(function(){
	const token = $("meta[name='csrf-token']").attr("content");

	/**  cancel date */
	$(document).on('click','.btnCancelar',function(){
		$(".modal-title").text($(".nombrePaciente").attr('npaciente'));
		$('.btnCancelarC').attr('cita',$(this).attr('cita'));
	});

	$(document).on('click','.btnCancelarC',function(){
		let date = $(this).attr('cita');
		let commentary = $("#selectCancelar").val();
		
		$.post('/consultorio/cancelarcita',{
                "_token": token,
                "date": date,
                "commentary": commentary
        }, function(data) {
			ohSnap('Cambios Aplicados', {color:'blue',duration:'1000'});
				 setTimeout(function() {
					location.reload();
				}, 1000);
        });
	});


	/** add date */
	$(document).on('click','.btnAddCita',function(){

		let patient = $(".nombrePaciente").attr('paciente');
		let date = $("#fecha").val();
		let hour = $("#hora").val();
		let affair = $("#asunto").val();

		$.post('/consultorio/agregarcita',{
            "_token": token,
            "patient": patient,
            "date": date,
            "hour" : hour,
			"affair": affair,
			
        }, function(data) {

			if(data.response) {
				$("#alert_error").removeAttr('hidden');
				$("#alert_error").html(data.message);
			} else {
				ohSnap('Cambios Aplicados', {color:'blue',duration:'1000'});
				 setTimeout(function() {
					location.reload();
				}, 1000);

				
				
        		
			}
        	
        });
	});
});
