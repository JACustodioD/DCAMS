<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--FONTS GOOGLE-->
    <link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans&display=swap" rel="stylesheet"> 
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--EFECTOS HOVER-->
    <link rel="stylesheet" href="/css/hover.css" media="all">
    <!--CSS Y RESPONSIVE-->
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/responsive.css">
    
</head>
<body>
    <header class="header-container container  mt-2" style="width: 100%">
        <div class="row ">
            <div class="col-md-4 col-phone">
                <h2 class="text-phone"> <i class="fas fa-phone"></i> 5522-9901 ext 29</h2>
            </div>
            <div class="offset-1 col-ocult">

            </div>
            <div class="col-md-5 d-flex justify-content-end">
                <span class="ml-4 horarios"><small><b>Horario:</b> Lun. a vie. de 8:00 a 17:00 <b>/</b>  Avenida Alfredo del Mazo #678, Tlalnepantla Edo. Mex.</small></span>
            </div>
            <div class=" col-12 col-md-2 text-center">
                <button type="button" class="btn  btn-outline-primary btn-sesion"> <i class="fas fa-user"><b></i>Iniciar sesión</b></button>
            </div>
        </div>

        <!--SOCIAL RED-->
        <div class="row  d-flex justify-content-between ">
            <div class="col-md-3 name-doc">
                <span><small>Dra. Amy Hernández Hernández <i class="fas fa-check"></i></small></span>
            </div>
            <div class="col-md-2 d-flex justify-content-end">
                <a href=""><i class="fab fa-instagram  icon-head hvr-grow-rotate"></i> </a>  
                <a href=""><i class="fab fa-facebook-square icon-head hvr-grow-rotate"></i></a>
                <a href=""><i class="fab fa-twitter-square icon-head hvr-grow-rotate"></i> </a>   
            </div>
        </div>
        <!--MENU-->
            <div class="col-md-12 col-menu">
                <nav class="navbar navbar-expand-md navbar-light menu">
                    <a class="navbar-brand" href="#"><img src="/img/icono-dental.png " class="icono" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav menu-list">
                        <li class="nav-item">
                          <a class="nav-link hvr-underline-from-left" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link hvr-underline-from-left" href="#">Acerca de </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link hvr-underline-from-left" href="#">Tratamientos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link hvr-underline-from-left" href="#">Promociones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-left" href="#">Contácto</a>
                          </li>
                      </ul>
                    </div>
                  </nav>
            </div>
        </div>
    </header>
    <!--SECCION SLIDER-->
    <section class="container" id="main"  >
         <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img src="/img/slider2.jpg" class="d-block w-100" alt="...">
                 </div>
                 <div class="carousel-item">
                     <img src="/img/slider4.jpg" class="d-block w-100" alt="...">
                 </div>
                 <div class="carousel-item">
                     <img src="/img/slider5.jpg" class="d-block w-100" alt="...">
                 </div>
                 </div>
                   <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 mt-2 d-flex align-items-center">
                                    <h1 class="display-4 text-slider"> Creamos sonrisas, mejoramos <strong> tú vida </strong> </h1>
                                </div>
                                <div class="col-md-5  mt-2">
                                    <form action="">
                                         <div class="card form-card">
                                             <div class="card-header card-encabezado">
                                                 <div class="row d-flex justify-content-between">
                                                    <span class="text-cardh">Tu primera cita</span>
                                                    <img src="/img/icono-calendar.png" class="icono-calendar" alt="">
                                                 </div>
                                              </div>
                                              <div class="card-body">
                                                 <div class="form-group">
                                                    <label for="name">Nombre:</label>
                                                    <input type="text" class="form-control">
                                                 </div>
                                                 <div class="form-group">
                                                    <label for="telefono">Telefono:</label>
                                                    <input type="telefono" class="form-control">
                                                 </div>
                                                 <div class="form-group">
                                                     <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="fecha">Fecha:</label>
                                                            <input type="date" name="fecha" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="hora">Hora:</label>
                                                            <input type="time" name="hora" class="form-control">
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <div class="form-group">
                                                    <label for="comentarios">Comentarios</label>
                                                    <textarea class="form-control" id="comentarios" rows="3"></textarea>
                                                 </div>
                                                 <div class="form-group text-center">
                                                    <button class="btn btn-primary form-control" style="width:50%;"><b>Agendar</b></button>
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
     <section class="container" id="img">
        
     </section>
     <!--SECCION ACERCA DE-->
     <section class="container">
         <div class="about-section">
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
        <div class="tratamientos-section">
            <div class="row">
                <div class="col-md-12 mt-3" id="tratamiento1">
                    <h1 class="pl-4">Tratamientos para ti.</h1>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 col-tratamientos mt-2" id="tratamiento2">
                     <img src="/img/icono2.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Limpieza dental</span>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento3">
                     <img src="/img/icono1.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Blanqueamiento dental</span>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento4">
                     <img src="/img/icono3.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Implantes</span>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento5">
                     <img src="/img/icono4.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Diseño de sonrisa</span>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento6">
                     <img src="/img/icono6.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Ortodoncia y endodoncia</span>
                </div>
            </div>
        </div>
     </section>
     <!--GIF-->
     <section class="container">
        <div class="gif-implante">
            <div class="row">
                <div class="col-md-12">
                    <img src="/img/implante.gif"  class="implante" alt="implante-gif">
                </div>
            </div>
        </div>
     </section>
     <!--PROMOCIONES-->
     <section class="container">
        <div class="promociones">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h1 class="pl-4 text-section"> Promociones. </h1>
                    <span class="pl-4 text-section">Disfruta de las promociones que Amy tiene para ti</span>
                </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <img src="/img/image-promo.jpg" class="pl-3 pb-3 img-fluid" alt="" height="300px" width="330px">
              </div>
              <div class="col-md-4">
                <img src="/img/image-promo1.jpg" class="pl-3 pb-3 img-fluid" alt="" height="300px" width="330px"> 
             </div>
             <div class="col-md-4">
                <img src="/img/image-promo2.jpg" class="pl-3 pb-3 img-fluid" alt="" height="300px" width="330px"> 
             </div>
           </div>
        </div>
     </section>
     <!--SECCION DE CONTÁCTO-->
     <section class="container">
        <div class="contacto">
            <div class="row mt-3">
                <div class="col-md-6">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d939.9968264891002!2d-99.15708017083129!3d19.542153799176397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f79a7764e5e3%3A0x32a6f5e67a308dfa!2sAv%20Alfredo%20del%20Mazo%20V%C3%A9lez%2029%2C%20Chalma%20La%20Barranca%2C%2054143%20Tlalnepantla%20de%20Baz%2C%20M%C3%A9x.!5e0!3m2!1sen!2smx!4v1572051999050!5m2!1sen!2smx"
                          width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                     </iframe>
                </div>
                <div class="col-md-6">
                    <h1>Contáctenos</h1>
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
                       <button class="btn btn-primary">Agendar una cita</button>
                   </span>
                </div>
            </div>
        </div>
     </section>
     <footer class="container">
        
     </footer>
    <!--SCRIPTS-->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/all.js"></script>
    <script src="/js/efecto.js"></script>
</body>
</html>