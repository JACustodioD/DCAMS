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
    
   
     <!--Content-->
         @yield('content')
     <!-- /Content -->
    
   
     <footer class="container">
        <div class="foot">
            <div class="row">
                <div class="col-md-4 mt-3 mb-3 col-foot">
                    <div class="text-justify">
                        <img src="/img/icono-dental.png" alt="" class="logo-foot"> <span><small>El consultorio AMY <br>
                            fue fundado por la doctora Amy Hernández Hernández y abrió sus puertas el 15 de marzo de 1994, 
                            con el entusiasmo que puede tener una joven dentista que desea formar su propia empresa
                            y con una clara visión: conseguir que el consultorio se convirtiera en un miembro integrado
                            en cada familia, logrando ser el consultorio de referencia del barrio y de las familias que en el viven.
                    </small></span>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mb-3 col-foot">
                    <small>Navegación:</small>
                    <ul>
                        <li><a href=""><small>Home</small></a></li>
                        <li><a href=""><small>Acerca de</small></a></li>
                        <li><a href=""><small>Tratamientos</small></a></li>
                        <li><a href=""><small>Promociones</small></a></li>
                        <li><a href=""><small>Contácto</small></a></li>
                    </ul>
                </div>
                <div class="col-md-4 mt-3 mb-3 col-foot" style="border-right: 1px solid gainsboro;">
                    <small>Tratamientos:</small>
                    <ul>
                        <li><a href=""><small>Limpieza dental</small></a></li>
                        <li><a href=""><small>Blanqueamiento dental</small></a></li>
                        <li><a href=""><small>Implantes</small></a></li>
                        <li><a href=""><small>Diseño de sonrisa</small></a></li>
                        <li><a href=""><small>Ortodoncia y endodoncia</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
     </footer>
     <footer class="container">
        <div class="subfoot">
            <div class="row">
                <div class="col-md-12 text-center">
                    <small>&copy; Todos los derechos reservados </small>
                </div>
            </div>
        </div>
     </footer>
    <!--SCRIPTS-->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/all.js"></script>
    <script src="/js/efecto.js"></script>
</body>
</html>