<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--FONTS GOOGLE-->
    <link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans|Raleway&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--EFECTOS HOVER-->
    <link rel="stylesheet" href="/css/hover.css" media="all">
    <!--CSS Y RESPONSIVE-->
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/img/icono-dental.png" rel="shortcut icon" type="image/x-icon" />
</head>
<body >

<!--MENU PRINC-->
<header>
    <div class="container-fluid menu-padding">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded menu-margin ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarPrincipal" aria-controls="navBarPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup" >
             <div class="navbar-nav d-flex justify-content-around " style="width: 100%">
                <div class="d-flex justify-content-start text-phone" style="width: 50%;">
                    
                </div>
                 <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#acercade">Acerca de</a>
                 <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#tratamientos">Tratamientos</a>
                 <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#promociones">Promociones</a>
                <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#contacto">Contácto</a>
                <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="/login">Mi cuenta</a>
             </div>
         </div>
     </nav>
    </div>
</header>
<section class="container-fluid submenu">
        <div class="row  d-flex align-items-center">
            <div class="col-md-1 col-12  icon-dental">
                <img src="/img/icono-dental.png" alt="icono-dental" width="120" height="120">
            </div>
            <div class="col-md-5  d-flex text-slogan">
                    <h3 class="slogan pl-3"> <strong class="letter-blue">C</strong>reamos sonrísas,
                     mejoramos tu vida.</h3>
            </div>
            <div class="col-md-3 d-flex justify-content-end align-items-center text-redes">

                <p class="text-siguenos mr-2">Síguenos |  </p>
                <a href=""><i class="fab fa-twitter-square icon-head hvr-grow-rotate"></i></a>
                <a href=""><i class="fab fa-facebook-square icon-head hvr-grow-rotate"></i></a>
                <a href=""><i class="fab fa-instagram icon-head hvr-grow-rotate"></i></a>
            </div>
            <div class="col-md-3 d-flex justify-content-end align-items-center text-redes">

                <p class="text-siguenos mr-2">Llámanos |  </p>
                <i class="fas fa-phone-square icon-head"></i> <p class="text-siguenos">553-55-333</p>
            </div>
           
        </div>
</section>

<!--STICKY MENU-->
<header>
    <div class="container-fluid menu-padding sticky-menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm  mb-5 bg-white rounded menu-margin " style="padding:0px !important;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup" >
             <div class="navbar-nav d-flex justify-content-around  align-items-center" style="width: 100%">
                <div class="d-flex justify-content-between align-items-center" style="width: 50%;">
                <a href="/"><img src="/img/icono-dental.png" alt="" height="90" width="90"></a>
                <a href="/citas" class="btn btn-outline-primary hvr-grow-shadow">Pide una cita</a>
                </div>
                
                 <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#acercade">Acerca de</a>
                 <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#tratamientos">Tratamientos</a>
                 <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#promociones">Promociones</a>
                <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#contacto">Contácto</a>
                <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="/login">Mi cuenta</a>
             </div>
         </div>
     </nav>
    </div>
</header>
<!--STICKY MENU-->

     <!--Content-->
         @yield('content')
     <!-- /Content -->

<footer class="container-fluid shadow-sm p-3 mb-1 " style=" padding-bottom: 0 !important;">
    <div class="row">
        <div class="col-md-4 col-foot-log">
            <div class=" d-flex">       
                <img src="../img/icono-dental.png" alt="logo" height="100" width="100">
                <p> <strong>N</strong>os importa tu sonrísa</p>
            </div> 
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi nostrum optio maiores? Laborum explicabo magni nulla quam voluptatem 
                deserunt rem, culpa debitis odio consectetur delectus magnam nam amet aut ex!</p>
        </div>
        <div class="col-md-4 mt-1  mb-3 col-foot text-foot">
            <h6> <strong>N</strong> avegación </h6>
                 <ul>
                    <li><a href="/citas"><small>Citas</small></a></li>
                        <li><a href="/"><small>Inicio</small></a></li>
                        <li><a href="/#acercade"><small>Acerca de</small></a></li>
                        <li><a href="/#tratamientos"><small>Tratamientos</small></a></li>
                        <li><a href="/#promociones"><small>Promociones</small></a></li>
                        <li><a href="/#contacto"><small>Contácto</small></a></li>
                 </ul>
         </div>
         <div class="col-md-4 mt-1 mb-3 col-foot text-foot">
            <h6> <strong>T</strong> ratamientos </h6> 
                 <ul>
                    <li><a href="/tratamientos#limpieza"><small>Limpieza dental</small></a></li>
                        <li><a href="/tratamientos#blanqueamiento"><small>Blanqueamiento dental</small></a></li>
                        <li><a href="/tratamientos#implantes"><small>Implantes</small></a></li>
                        <li><a href="/tratamientos#sonrisa"><small>Diseño de sonrisa</small></a></li>
                        <li><a href="/tratamientos#ortodoncia"><small>Ortodoncia y endodoncia</small></a></li>
                 </ul>
         </div>
    </div>
</footer>

<footer class="container-fluid subfoot">
     <div class="row">
         <div class="col-md-12 d-flex justify-content-between">
             <small>&copy; Todos los derechos reservados </small> 
             <small>Powered By: <a href="https://provisionssystems.com/" class="text-primary" target="_blank">ProVisions Systems </a></small>
         </div>
     </div>
</footer>

<span class="botoncito"><i class="fas fa-angle-double-up"></i></span>
<span class="botoncita"><a href=""><i class="far fa-calendar-check"></i></a>Pide tu cita</span>
   
<!--SCRIPT-->
<script src="/js/lib/jquery.js"></script>
<script src="/js/lib/bootstrap.min.js"></script>
<script src="/js/lib/all.js"></script>
<script src="/js/dcams/boton.js"></script>
<script src="/js/dcams/sticky-menu.js"></script>

@yield('script')
<script src="/js/efecto.js"></script>


</body>
</html>
