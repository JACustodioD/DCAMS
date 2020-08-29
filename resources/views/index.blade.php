@extends('layouts.base')
@section('content')
<section>
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
                    <a href="/tratamientos/#implantes" class="hvr-wobble-horizontal link-saber">Saber más<i class="fas fa-chevron-right"></i></a></h3>  
                </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/slider33.jpg" class="d-block w-100" alt="slider2">
                    <div class="carousel-caption d-none d-md-block caption-carou ">
                    <h3 class="d-flex align-items-center justify-content-end mt-3 text-sabermas mt-5">
                    <a href="/tratamientos/#sonrisa" class="hvr-wobble-horizontal link-saber">Saber más<i class="fas fa-chevron-right"></i></a></h3>  
                </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/slider55.jpg" class="d-block w-100" alt="slider2">
                    <div class="carousel-caption d-none d-md-block caption-carou ">
                    <h3 class="d-flex align-items-center justify-content-end mt-3 text-sabermas mt-5">
                    <a href="#promociones" class="hvr-wobble-horizontal link-saber">Saber más<i class="fas fa-chevron-right"></i></a></h3>  
                    </div>
                </div>
              
            </div>
        </div>
</section>
<!--SECCION FONDO-->
<div class="container-fluid fondo-index">

</div>
<!--SECCION ACERCA DE-->
<section class="container-fluid shadow-sm p-3 mb-1" style="height: 100%" id="acercade">
     <div class="about-section" >
         <div class="desc-about">      
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h1 class="text-center " >¿Por qué debería elegirnos?</h1>
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
       <!--TRATAMIENTOS-->
<section class="container-fluid tratamientos-section d-none d-lg-block" id="tratamientos" style="height: 100%">
    <div class="row">
        <div class="col-md-12 mt-3">
            <h1 class="text-center">Tratamientos</h1>
            <hr id="separator1">
            <p class="text-center">Contamos con los tratamientos especializados para ti</p>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row ">
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot1.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Limpieza dental</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#limpieza" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot2.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Blanqueamiento dental</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#blanqueamiento" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot3.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Implantes</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#implantes" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot4.png" alt="" height="200" width="200">
                            <figcaption > 
                                 <h5 class="text-center text-primary">Diseño de sonrísa</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#sonrisa" type="button" class="btn btn-outline-primary">Saber más</a>
                         </figure>   
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row ">
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot1.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Limpieza dental</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#limpieza" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot2.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Blanqueamiento dental</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#blanqueamiento" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot3.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Implantes</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#implantes" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot4.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Diseño de sonrísa</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#sonrisa" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row ">
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot1.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Limpieza dental</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#limpieza" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot2.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Blanqueamiento dental</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#blanqueamiento" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot3.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Implantes</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#implantes" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                    <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                        <figure class="text-center">
                            <img src="/img/iconot4.png" alt="" height="200" width="200">
                            <figcaption > 
                                <h5 class="text-center text-primary">Diseño de sonrísa</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <a href="/tratamientos/#sonrisa" type="button" class="btn btn-outline-primary">Saber más</a>
                        </figure>   
                    </div>
                </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
    </div>
</section>

<!-- SLIDER RESPONSIVE DE TRATAMIENTOS-->
<section class="container-fluid tratamientos-section d-xs-block d-lg-none" id="tratamientos" style="height: 100%">
     <div class="row">
         <div class="col-md-12 mt-3">
             <h1 class="text-center">Tratamientos</h1>
                 <hr id="separator1">
                 <p class="text-center">Contamos con los tratamientos especializados para ti</p>
         </div>
     </div>
    <div id="carouselExampleIndicatorsR" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <div class="row ">
                     <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                         <figure class="text-center">
                             <img src="/img/iconot1.png" alt="" height="200" width="200">
                             <figcaption > 
                                 <h5 class="text-center text-primary">Limpieza dental</h5>
                             </figcaption>
                             <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                             <a href="" type="button" class="btn btn-outline-primary">Saber más</a>
                         </figure>   
                     </div>
                 </div>
             </div>  
             <div class="carousel-item">
                 <div class="row ">
                     <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                         <figure class="text-center">
                             <img src="/img/iconot2.png" alt="" height="200" width="200">
                             <figcaption > 
                                 <h5 class="text-center text-primary">Blanqueamiento dental</h5>
                             </figcaption>
                             <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                             <button type="button" class="btn btn-outline-primary">Saber más</button>
                         </figure>   
                     </div>
                 </div>
             </div> 
             <div class="carousel-item">
                 <div class="row ">
                     <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                         <figure class="text-center">
                             <img src="/img/iconot3.png" alt="" height="200" width="200">
                             <figcaption > 
                                <h5 class="text-center text-primary">Implantes dentales</h5>
                             </figcaption>
                             <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <button type="button" class="btn btn-outline-primary">Saber más</button>
                         </figure>   
                     </div>
                 </div>
             </div> 
             <div class="carousel-item">
                <div class="row">
                     <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                         <figure class="text-center">
                             <img src="/img/iconot4.png" alt="" height="200" width="200">
                             <figcaption > 
                                 <h5 class="text-center text-primary">Diseño de sonrísa</h5>
                             </figcaption>
                             <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                              <button type="button" class="btn btn-outline-primary">Saber más</button>
                         </figure>   
                     </div>
                </div>
             </div>
             <div class="carousel-item">
                 <div class="row">
                     <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                         <figure class="text-center">
                             <img src="/img/iconot5.png" alt="" height="200" width="200">
                             <figcaption > 
                                 <h5 class="text-center text-primary">Ortodoncia</h5>
                             </figcaption>
                             <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                             <button type="button" class="btn btn-outline-primary">Saber más</button>
                         </figure>   
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <div class="row">
                     <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                         <figure class="text-center">
                             <img src="/img/iconot6.png" alt="" height="200" width="200">
                             <figcaption > 
                                <h5 class="text-center text-primary">Endodoncia</h5>
                            </figcaption>
                            <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                            <button type="button" class="btn btn-outline-primary">Saber más</button>
                         </figure>   
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <div class="row">
                     <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                         <figure class="text-center">
                             <img src="/img/iconot6.png" alt="" height="200" width="200">
                             <figcaption > 
                                 <h5 class="text-center text-primary">Periodoncia</h5>
                             </figcaption>
                             <p class="p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, sit numquam deleniti recusandae enim quidem quibusdam corporis laborum, aut mollitia sint possimus hic fuga ea ullam quis, in quisquam veniam!</p>
                             <button type="button" class="btn btn-outline-primary">Saber más</button>
                         </figure>   
                     </div>
                 </div>
             </div>
         </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicatorsR" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicatorsR" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
     </div>
 </section>
     <!--SECCION DE AGENDAR CITA-->
    
 <section class="container-fluid bg-primary shadow-sm p-3 mb-1" style="height: 50%">
    <div class="cita-section d-flex align-items-center justify-content-center">
        <div class="row ">
             <div class="col-md-12 mt-3 text-center">
                 <h3 class="pedir-cita ">Tú sonrísa es lo más importante | <strong>Contáctanos</strong></h3>
                 <a href="/citas" class="btn btn-outline-light">Agendar una cita | <i class="far fa-calendar"></i></a>
             </div>
         </div>
     </div>
 </section>   
 <!--SECCION DE PROMOCIONES-->
 
<section class="container-fluid shadow-sm p-3 mb-1" id="promociones" >
    <div class="row">
        <div class="col-md-12 mt-3">
            <h1 class="text-center">Disfruta de nuestras promociones</h1>
                <hr id="separator1">
        </div>
    </div>
    <div class="promo-section">
        <div class="row">
            <div class="col-md-6 mt-3">
                <img src="/img/promo1.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6 mt-3">
                <img src="/img/promo2.jpg" alt="" width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <img src="/img/promo3.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6 mt-3">
                <img src="/img/promo2.jpg" alt="" width="100%">
            </div>
        </div>
    </div>
</section>

     <!--SECCION DE CONTÁCTO-->
<section class="container-fluid shadow-sm p-3 mb-1 contacto" style="height: 100%" id="contacto">
         <div class="row mt-3">
                <div class="col-md-6">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d939.9968264891002!2d-99.15708017083129!3d19.542153799176397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f79a7764e5e3%3A0x32a6f5e67a308dfa!2sAv%20Alfredo%20del%20Mazo%20V%C3%A9lez%2029%2C%20Chalma%20La%20Barranca%2C%2054143%20Tlalnepantla%20de%20Baz%2C%20M%C3%A9x.!5e0!3m2!1sen!2smx!4v1572051999050!5m2!1sen!2smx"
                          width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                     </iframe>
                </div>
                <div class="col-md-6 ">
                    <h1 class="title-contacto">Contáctanos</h1>
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
                       <a href="/citas"><button class="btn btn-light">Agendar una cita</button></a>
                   </span>
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
 