$(document).ready(function(){
	$(document).on('click','.btnEnabled',function(){
		let patient = $(".patientName").attr('patient');

		$.post('/consultorio/habilitarhistoria',{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "patient": patient,
        }, function(data) {
			ohSnap('Historia medica habilitada', {color:'blue',duration: '1000'});
        });
	});
});
