$(document).ready(function(){
	$(document).on('click','.btnHabilitar',function(){
		var usuario = $(".nombrePaciente").attr('paciente');

		$.post('/consultorio/habilitarhistoria',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "usuario": usuario,
        }, function(data) {
    		alert("¡Historia medica habilitada!");
    		

        });
	});
});