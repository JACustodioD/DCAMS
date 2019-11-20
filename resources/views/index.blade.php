@extends('layouts.base')
@section('content')
<section class="container" id="main"  >
     <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="/img/slider2.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="/img/slider3.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="/img/slider5.jpg" class="d-block w-100" alt="...">
             </div>
         </div>
         <div class="overlay">
             <div class="container">
                 <div class="row">
                     <div class=" col-sm-4 col-md-6 mt-2 d-flex align-items-center">
                         <h1 class="text-slider"> Creamos sonrísas, mejoramos <strong> tú vida. </strong> </h1>
                     </div>
                     <div class=" col-sm-7 col-md-6 d-flex align-items-center  mt-2">
                         
                <form action="/cita" method="POST" name="frm_registro" style="width: 100%;">
                    @csrf
                    <div class="card form-card">
                        <div class="card-header card-encabezado">
                            <div class="row d-flex justify-content-between">
                                <p class="text-cardh">Agendar una cita</p>
                                <img src="/img/icono-calendar.png" class="icono-calendar" alt="">
                            </div>
                        </div>
                        <div class="card-body form-body">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" required autofocus>
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                 <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required autofocus>

                                 @error('telefono')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <label for="fecha">Fecha:</label>
                                        <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" required autofocus>
                                        @error('fecha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hora">Hora:</label>
                                         <input type="time" name="hora" class="form-control @error('hora') is-invalid @enderror" required autofocus>
                                         @error('hora')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                    </div>
                                </div>
                             </div>
                             <div class="form-group ">
                                <label for="comentarios">Comentarios</label>
                                 <textarea class="form-control @error('comentario') is-invalid @enderror" id="comentarios" rows="3" name="comentario" required autofocus></textarea>

                                 @error('comentario')
                                 <span class="invalid-feedback" role="alert">
                                     <strong> {{ $message }}</strong>
                                 </span>
                                 @enderror
                             </div>
                             <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary form-control" style="width:50%;" autofocus><b>Agendar</b></button>
                             </div>
                         </div>
                     </div>
                </form>
                 </div>
             </div>
         </div>
     </div>
    </div>
 </section>
     <!--SECCION ACERCA DE-->
     <section class="container">
         <div class="about-section" id="acercade">
             <div class="row">
                 <div class="col-12 mt-3">
                     <h1 class="text-about text-center display-4" >¿Por qué debería <strong>elegirnos</strong>?</h1>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <p class="text-center p-3 parrafo-about">Nuestra <b>misión</b> es brindar un servicio odontológico integral de calidad,
                        con una atención personalizada y en un ambiente agradable; poniendo a su disposición 
                        nuestros servicios especializados comprometiendonos con el bienestar y satisfacción de nuestros pacientes.</p>
                        <hr id="separator">
                 </div>
             </div>
             <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">¡A su servicio!</h3>
                 </div>
             </div>
             <div class="row mt-5">
                <div class="col-md-3">
                    <figure class="text-center">
                        <i class="fas fa-tooth about-icon"></i>
                        <figcaption>Servicios odontológicos especializados.</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                     <figure class="text-center">
                         <i class="fas fa-dollar-sign about-icon"></i>
                         <figcaption>Presupuestos totalmente gratis y pagos accesibles.</figcaption>
                     </figure>
                </div>
                <div class="col-md-3">
                     <figure class="text-center">
                         <i class="fas fa-teeth about-icon"></i>
                         <figcaption>Diseñamos las mejores sonrisas, con los mejores servicios.</figcaption>
                     </figure>
                 </div>
                 <div class="col-md-3">
                     <figure class="text-center">
                         <i class="fas fa-thumbs-up about-icon"></i>
                         <figcaption>Mejoramos tu calidad de vida.</figcaption>
                     </figure>
                 </div>
             </div>
         </div>
     </section>
     <!--SECCION DE TRATAMIENTOS-->
     <section class="container">
        <div class="tratamientos-section" id="tratamientos">
            <div class="row">
                <div class="col-md-12 mt-3" id="tratamiento1">
                    <h1 class="pl-4 title-tratamientos">Tratamientos para ti.</h1>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 col-tratamientos mt-2" id="tratamiento2">
                     <a href="/tratamientos"><img src="/img/icono2.png" class="icon-tratamientos img-fluid" alt="limpieza-dental"> <span class="text-tratamientoss">Limpieza dental</span></a>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento3">
                     <a href="/tratamientos"><img src="/img/icono1.png" class="icon-tratamientos img-fluid" alt="limpieza-dental"> <span class="text-tratamientoss">Blanqueamiento dental</span></a>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento4">
                    <a href="/tratamientos"><img src="/img/icono3.png" class="icon-tratamientos img-fluid" alt="limpieza-dental"> <span class="text-tratamientoss">Implantes</span></a>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento5">
                    <a href="/tratamientos"> <img src="/img/icono4.png" class="icon-tratamientos img-fluid" alt="limpieza-dental"> <span class="text-tratamientoss">Diseño de sonrisa</span></a>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento6">
                    <a href="/tratamientos"> <img src="/img/icono6.png" class="icon-tratamientos img-fluid" alt="limpieza-dental"> <span class="text-tratamientoss">Ortodoncia</span></a>
               </div>
            </div>    
        </div>
     </section>
     <!--GIF-->
     <section class="container" >
        <div class="gif-implante">
            <div class="row">
                <div class="col-md-12" >
                    <img src="/img/implante.gif"  class="implante" alt="implante-gif" >          
                </div>
            </div>
        </div>
     </section>
     <!--PROMOCIONES-->
     <section class="container">
        <div class="promociones" id="promociones">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h1 class="pl-4 text-section"> Promociones. </h1>
                    <span class="pl-4" style="color: white;">Disfruta de nuestras promociones</span>
                </div>
            </div>
            <div class="row mt-3">
    
              <div class="col-md-4">
                <img src="/img/image-promo.jpg" class=" pl-3 pb-3 img-fluid img-tratamientos" alt="" height="300px" width="330px">
              </div>
              <div class="col-md-4">
                <img src="/img/image-promo1.jpg" class="pl-3 pb-3 img-fluid img-tratamientos" alt="" height="300px" width="330px"> 
             </div>
             <div class="col-md-4 img-tratamientos">
                <img src="/img/image-promo2.jpg" class="pl-3 pb-3 img-fluid "  alt="" height="300px" width="330px"> 
             </div>
            
           </div>
        </div>
     </section>
     <!--SECCION DE CONTÁCTO-->
     <section class="container">
        <div class="contacto" id="contacto">
            <div class="row mt-3 mb-3">
                <div class="col-md-6">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d939.9968264891002!2d-99.15708017083129!3d19.542153799176397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f79a7764e5e3%3A0x32a6f5e67a308dfa!2sAv%20Alfredo%20del%20Mazo%20V%C3%A9lez%2029%2C%20Chalma%20La%20Barranca%2C%2054143%20Tlalnepantla%20de%20Baz%2C%20M%C3%A9x.!5e0!3m2!1sen!2smx!4v1572051999050!5m2!1sen!2smx"
                          width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                     </iframe>
                </div>
                <div class="col-md-6">
                    <h1 class="title-contacto">Contáctenos</h1>
                    <span><i class="fas fa-map-marker-alt icon-contacto"></i>Av Alfredo del Mazo Vélez 29, Chalma La Barranca,
                         54143 Tlalnepantla de Baz, Méx.
                    </span>
                    <hr id="separator-contacto">
                    <span><i class="fas fa-phone icon-contacto"></i>
                        5522-9901 ext 29
                   </span>
                   <hr id="separator-contacto">
                   <span> <i class="fas fa-clock icon-contacto"></i>
                    Horarios: Lunes a Viernes 8:00 a 17:00
                   </span>
                   <hr id="separator-contacto">
                   <span>
                        <a href=""><i class="fab fa-instagram  icon-contacto hvr-grow-rotate"></i> </a>  
                        <a href=""><i class="fab fa-facebook-square icon-contacto hvr-grow-rotate"></i></a>
                        <a href=""><i class="fab fa-twitter-square icon-contacto hvr-grow-rotate"></i> </a> 
                   </span>
                   <hr id="separator-contacto">
                   <span>
                       <a href="/citas"><button class="btn btn-primary">Agendar una cita</button></a>
                   </span>
                </div>
            </div>
        </div>
     </section>
    
 @endsection
 @section('script')
    <script src="/smooth-scroll.min"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
        // Selectors
        ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
        header: null, // Selector for fixed headers (must be a valid CSS selector)
        topOnEmptyHash: true, // Scroll to the top of the page for links with href="#"

        // Speed & Duration
        speed: 500, // Integer. Amount of time in milliseconds it should take to scroll 1000px
        speedAsDuration: false, // If true, use speed as the total duration of the scroll animation
        durationMax: null, // Integer. The maximum amount of time the scroll animation should take
        durationMin: null, // Integer. The minimum amount of time the scroll animation should take
        clip: true, // If true, adjust scroll distance to prevent abrupt stops near the bottom of the page
        offset: function (anchor, toggle) {

            // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
            // This example is a function, but you could do something as simple as `offset: 25`

            // An example returning different values based on whether the clicked link was in the header nav or not
            if (toggle.classList.closest('.my-header-nav')) {
                return 25;
            } else {
                return 50;
            }

        },

        // Easing
        easing: 'easeInOutCubic', // Easing pattern to use
        customEasing: function (time) {

            // Function. Custom easing pattern
            // If this is set to anything other than null, will override the easing option above

            // return <your formulate with time as a multiplier>

            // Example: easeInOut Quad
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

        },

        // History
        updateURL: true, // Update the URL on scroll
        popstate: true, // Animate scrolling with the forward/backward browser buttons (requires updateURL to be true)

        // Custom Events
        emitEvents: true // Emit custom events

        });
    </script>
 @endsection
 