$(document).ready(function(){

    /** search patient */
    $(document).on('keyup', '#nombre', function(){

        let token = $("meta[name='csrf-token']").attr("content");
        let patient_name = $(this).val();

        if(patient_name.length == 0){

            $.post('/consultorio/mostrarpaciente', {

                "_token": token,
                "patient": patient_name,
            
            }, function(data) {

                $('#pacientes').children().remove();
                showPatients(data,token);
            
            }); 
        } else {

            $.post('/consultorio/buscarpaciente', {

                "_token": token,
                "patient": patient_name,

            }, function(data) {

                $('#pacientes').children().remove();

                if (data.length == 0) {

                    $("#pacientes").append(`
                        <div class="col-md-12" >
                            <div class="text-center">
                                <h5 class="text-primary"> No se encontro ningun usuario con ese nombre </h5>
                            </div>
                        </div> `);
                    

                } else {
                  showPatients(data,token);
                }
            });
       }


    });
    /** end search patient */

    
    /** show results of search */
    function showPatients(data,token){

        for (let i = 0; i <= data.length - 1; i++) {
            let date = data[i].created_at.substr(0,10);
            date = date.replace(/-/g,"/");
        
            const d = new Date(date);
            const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d)
            const mo = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(d)
            const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d)
    
            data[i].id = btoa(data[i].id);
    
               $("#pacientes").append(`
                <div class="col-md-4" >
                <div class="card border-primary mb-3">
                <div class="card">
                <img src="/perfil/${data[i].image}" class="card-img-top img-paciente mt-2" alt="foto-perfil">
                <div class="card-body">
                <div class="text-center">
                <h5 class="card-title text-primary">${data[i].fullName}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Paciente desde: ${da}-${mo}-${ye} </h6>
                <form action="/consultorio/tratamientos/${data[i].id}" method="GET">
                <button  class="btn btn-outline-secondary btn-block mb-1 btnTratamientos" type="submit">Ver tratamientos</button>
                </form>
                <form action="/consultorio/historialmedico/${data[i].id}" method="GET">
                <button class="btn btn-outline-secondary btn-block mb-1" patient="${data[i].id}" type="submit">Ver Historia médica</button>
                </form>
                <form action="/consultorio/citas/${data[i].id}" method="GET">
                <button class="btn btn-outline-secondary  btn-block mb-1" patient="${data[0].id}" type="submit">Crear nueva cita</button>
                </form>
                <p class="text-danger card-link btnEliminarP" patient="${data[i].id}" data-toggle="modal" data-target="#exampleModal1"> Eliminar paciente</p>
                </div> </div> </div>
               `);
        }
    }
    /** end show results of search */


    /** Delete patient */
    $(document).on('click','.btnEliminarP',function(){

        $('.btnBorrarP').attr('patient',$(this).attr('patient'));

    });

    $(document).on('click','.btnBorrarP',function(){
        
        let token = $("meta[name='csrf-token']").attr("content");
        let patient = $(this).attr('patient');
        
        $.post('/consultorio/borrarpaciente', {
                "_token": token,
                'patient': patient

        }, function(data) {

            if(data){
                $('.'+data).remove();
                alert('Registro eliminado');
            }
        
            if($('.cont-pacientes').length == 0){
                  emptyList();
            }
            
        });
    });

    /** end Delete patient */


    function emptyList(){
        let html = `
        <div class="container mt-5">
        <div class="row">
        <div class="col-md-12 text-center">
        <figure class="figure">
        <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
        <figcaption class="figure-caption"> <h4 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Ya no tienes más pacientes.</h4>  </figcaption>
        </figure>
        </div>
        </div>
        </div> `;
       

        $(".titulo").remove();
        $(".pacientes").append(html);
    }

});
