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
    <header class="header-container container  mt-2">
        <div class="row">
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
    <section class="container" id="main">
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
                                    <h1 class="display-4 text-slider"> Tu Consultorio dental <strong> de confianza </strong> </h1>
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
                                                    <button class="btn btn-primary" style="width:50%;"><b>Agendar</b></button>
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
     <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/all.js"></script>
</body>
</html>