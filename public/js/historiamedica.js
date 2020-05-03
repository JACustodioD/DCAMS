$(document).ready(function(){
	$(document).on('click','.btnEnabled',function(){
		let patient = $(".patientName").attr('patient');

		$.post('/consultorio/habilitarhistoria',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "patient": patient,
        }, function(data) {
    		alert("¡Historia medica habilitada!");


        });
	});
});
