@extends('layouts.base')
@section('content')
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
                     <a href="/tratamientos"><img src="/img/icono2.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Limpieza dental</span></a>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento3">
                     <a href="/tratamientos"><img src="/img/icono1.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Blanqueamiento dental</span></a>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento4">
                    <a href="/tratamientos"><img src="/img/icono3.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Implantes</span></a>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento5">
                    <a href="/tratamientos"> <img src="/img/icono4.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Diseño de sonrisa</span></a>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col-md-6 mt-1 col-tratamientos" id="tratamiento6">
                    <a href="/tratamientos"> <img src="/img/icono6.png" class="icon-tratamientos" alt="limpieza-dental"> <span>Ortodoncia y endodoncia</span></a>
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
 @endsection