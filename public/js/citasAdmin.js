$(document).ready(function(){
	$(document).on('click','.btnCancelar',function(){
		$(".modal-title").text($(".nombrePaciente").attr('npaciente'));
		$('.btnCancelarC').attr('cita',$(this).attr('cita'));
	});

	$(document).on('click','.btnCancelarC',function(){
		var cita = $(this).attr('cita');
		var comentario = $("#selectCancelar").val();
		$.post('/consultorio/cancelarcita',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "cita": cita,
                "comentario": comentario
        }, function(data) {
					location.reload();
        });
	});


	$(document).on('click','.btnAddCita',function(){
		var usuario = $(".nombrePaciente").attr('paciente');
		var fecha = $("#fecha").val();
		var hora = $("#hora").val();
		var asunto = $("#asunto").val();
		$.post('/consultorio/agregarcita',{
            "_token": $("meta[name='csrf-token']").attr("content"),
            "usuario": usuario,
            "fecha": fecha,
            "hora" : hora,
            "asunto": asunto,
        }, function(data) {
        	alert("Cita agregada");
        	location.reload();
        });
	});
});
