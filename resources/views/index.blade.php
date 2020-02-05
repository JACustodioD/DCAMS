@extends('layouts.base')
@section('content')
<section>
    <div  class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/slider22.jpg" class="d-block w-100" alt="slider1">
                    <div class="carousel-caption d-none d-md-block caption-carou ">
                    <h3 class="d-flex align-items-center justify-content-end mt-3 text-sabermas ">
                            <a href="" class="hvr-wobble-horizontal link-saber">Saber más<i class="fas fa-chevron-right"></i></a></h3>  
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/slider33.jpg" class="d-block w-100" alt="slider2">
                    <div class="carousel-caption d-none d-md-block caption-carou ">
                    <h3 class="d-flex align-items-center justify-content-end mt-3 text-sabermas mt-5">
                    <a href="" class="hvr-wobble-horizontal link-saber">Saber más<i class="fas fa-chevron-right"></i></a></h3>  
                </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/slider55.jpg" class="d-block w-100" alt="slider2">
                    <div class="carousel-caption d-none d-md-block caption-carou ">
                    <h3 class="d-flex align-items-center justify-content-end mt-3 text-sabermas mt-5">
                    <a href="" class="hvr-wobble-horizontal link-saber">Saber más<i class="fas fa-chevron-right"></i></a></h3>  
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</section>
     <!--SECCION ACERCA DE-->
<section class="container-fluid" style="height: 100%">
     <div class="about-section" id="acercade"  >
         <div class="desc-about">      
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h1 class="text-about text-center display-4" >¿Por qué debería elegirnos?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
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
         </div>
        <div class=" desc-about d-flex align-items-center ">
             <div class="row "  >
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
     </div>
</section>
     <!--SECCION DE TRATAMIENTOS-->
     <section class="container-fluid" id="tratamientos">
        <div class="tratamientos-section">
            <div class="col-md-6 p-3">
                <div class="card">
                    <div class="card-body">
                    <form class="" >
                            <div class="form-row ">
                              <div class="form-group col-md-12">
                                <label for="inputEmail4"><span class="badge badge-primary">Nombre:</span></label>
                                <input type="email" class="form-control" id="inputEmail4">
                              </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 ">
                                    <label for="inputPassword4">Correo:</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="inputPassword4">Teléfono:</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-row">
                             <div class="form-group col-md-12">
                                <label for="inputState">Tratamiento:</label>
                                <select id="inputState" class="form-control">
                                     <option selected>...</option>
                                    <option>Limpieza dental</option>
                                    <option>Diseño de sonrísa</option>
                                    <option>Ortodoncia</option>
                                    <option>Endodoncia</option>
                                    <option>Implantes</option>
                                </select>
                             </div>   
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputZip">Hora estimada:</label>
                                <input type="time" class="form-control" id="inputZip">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputZip">Día estimado:</label>
                                <input type="date" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                          </form>
                        </div>
                    </div>
            </div>
        </div>
     </section>
       <!--PROMOCIONES-->
       <section class="container" id="promociones">
        <div class="promociones" style="height: 100vh;" >
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
             <div class="row">
                <div class="col-md-12" >
                    <img src="/img/implante.gif"  class="implante" alt="implante-gif" width="100%" height="50%" >          
                </div>
            </div>
       </div>  
     </section>
   
     <!--SECCION DE CONTÁCTO-->
     <section class="container" id="contacto">
        <div class="contacto" >
            <div class="row mt-5 mb-3">
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
                        <a href="https://www.instagram.com"><i class="fab fa-instagram  icon-contacto hvr-grow-rotate"></i> </a>  
                        <a href="https://www.facebook.com"><i class="fab fa-facebook-square icon-contacto hvr-grow-rotate"></i></a>
                        <a href="https://www.twitter.com"><i class="fab fa-twitter-square icon-contacto hvr-grow-rotate"></i> </a> 
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
    <script src="/js/smooth-scroll.min.js"></script>

    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            // Selectors
            ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
            header: null, // Selector for fixed headers (must be a valid CSS selector)
            topOnEmptyHash: true, // Scroll to the top of the page for links with href="#"

            // Speed & Duration
            speed: 800, // Integer. Amount of time in milliseconds it should take to scroll 1000px
            speedAsDuration: false, // If true, use speed as the total duration of the scroll animation
            durationMax: null, // Integer. The maximum amount of time the scroll animation should take
            durationMin: null, // Integer. The minimum amount of time the scroll animation should take
            clip: true, // If true, adjust scroll distance to prevent abrupt stops near the bottom of the page
            offset:25 /* function (anchor, toggle) {

                // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
                // This example is a function, but you could do something as simple as `offset: 25`

                // An example returning different values based on whether the clicked link was in the header nav or not
                if (toggle.classList.closest('.my-header-nav')) {
                    return 25;
                } else {
                    return 50;
                }

            }*/,

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
 