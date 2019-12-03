<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--FONTS GOOGLE-->
    <link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans&display=swap" rel="stylesheet"> 
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--EFECTOS HOVER-->
    <link rel="stylesheet" href="/css/hover.css" media="all">
    <!--CSS Y RESPONSIVE-->
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> 
    <link href="/img/icono-dental.png" rel="shortcut icon" type="image/x-icon" /> 
    
</head>
<body>
<header class="container  mt-2" style="width: 100%">
    <div class="header-container">
        <div class="row ">
            <div class="col-md-4 col-phone">
                <h2 class="text-phone"> <i class="fas fa-phone"></i> 55229901 ext 02</h2>
            </div>
            <div class=" col-md-8 col-md-2 d-flex justify-content-end ">
                <a href="/citas"><button type="button" class="btn  btn-outline-primary btn-sesion"> <i class="fas fa-calendar-alt"><b></i>Agendar cita</b></button></a>
               <a href="/login"><button type="button" class="btn  btn-outline-primary btn-sesion"> <i class="fas fa-user"><b></i>Iniciar sesión</b></button></a>
            </div>
        </div>

        <!--SOCIAL RED-->
        <div class="row  d-flex justify-content-between ">
            <div class=" col-sm-4 col-md-3 name-doc">
                <span><small>Dra. Amy Hernández Hernández <i class="fas fa-check"></i></small></span>
            </div>
            <div class="col-md-2 d-flex justify-content-end">
                <a href="https://www.instagram.com"><i class="fab fa-instagram  icon-head hvr-grow-rotate"></i> </a>  
                <a href="https://www.facebook.com"><i class="fab fa-facebook-square icon-head hvr-grow-rotate"></i></a>
                <a href="https://www.twitter.com"><i class="fab fa-twitter-square icon-head hvr-grow-rotate"></i> </a>   
            </div>
        </div>
        <!--MENU-->
            <div class="col-md-12 col-menu">
                <nav class="navbar navbar-expand-md navbar-light menu">
                    <a class="navbar-brand" href="/"><img src="/img/icono-dental.png " class="icono" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbarNav" id="navbarNav">
                      <ul class="navbar-nav menu-list">
                        <li class="nav-item">
                          <a class="nav-link hvr-underline-from-left" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link hvr-underline-from-left"  data-scroll href="/#acercade">Acerca de </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link hvr-underline-from-left"  data-scroll href="/#tratamientos">Tratamientos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link hvr-underline-from-left"  data-scroll href="/#promociones">Promociones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-left"  data-scroll href="/#contacto">Contácto</a>
                          </li>
                      </ul>
                    </div>
                  </nav>
            </div>
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
                        <img src="/img/icono-dental.png" alt="" class="logo-foot"> <span><small><b>El consultorio AMY</b> <br>
                            fue fundado por la doctora Amy Hernández Hernández y abrió sus puertas el 15 de marzo de 1994, 
                            con el entusiasmo que puede tener una joven dentista que desea formar su propia empresa
                            y con una clara visión: conseguir que el consultorio se convirtiera en un miembro integrado
                            en cada familia, logrando ser el consultorio de referencia del barrio y de las familias que en el viven.
                    </small></span>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mb-3 col-foot">
                    <small><b>Navegación:</b></small>
                    <ul>
                        <li><a href="/citas"><small>Citas</small></a></li>
                        <li><a href="/"><small>Inicio</small></a></li>
                        <li><a href="/#acercade"><small>Acerca de</small></a></li>
                        <li><a href="/#tratamientos"><small>Tratamientos</small></a></li>
                        <li><a href="/#promociones"><small>Promociones</small></a></li>
                        <li><a href="/#contacto"><small>Contácto</small></a></li>
                    </ul>
                </div>
                <div class="col-md-4 mt-3 mb-3 col-foot" style="border-right: 1px solid gainsboro;">
                    <small><b>Tratamientos:</b></small>
                    <ul>
                        <li><a href="/tratamientos#limpieza"><small>Limpieza dental</small></a></li>
                        <li><a href="/tratamientos#blanqueamiento"><small>Blanqueamiento dental</small></a></li>
                        <li><a href="/tratamientos#implantes"><small>Implantes</small></a></li>
                        <li><a href="/tratamientos#sonrisa"><small>Diseño de sonrisa</small></a></li>
                        <li><a href="/tratamientos#ortodoncia"><small>Ortodoncia y endodoncia</small></a></li>
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

     <span class="botoncito"><i class="far fa-arrow-alt-circle-up"></i></span>
    <!--SCRIPTS-->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/all.js"></script>
    <script src="/js/efecto.js"></script>
    @yield('script')
    <script type="text/javascript">
        $(document).ready(function(){
          $('.botoncito').click(function(){
                $('body, html').animate({
                    scrollTop: '0px'
                }, 300);
            });
      
          $(window).scroll(function(){
            if( $(this).scrollTop() > 0 ){
              $('.botoncito').slideDown(300);
            } else {
              $('.botoncito').slideUp(300);
            }
          });
        });
      
</script>

</body>
</html>