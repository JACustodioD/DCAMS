$(document).ready(function(){
	$(document).on('click','.btnCancelar',function(){
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

        });
       

	});
});