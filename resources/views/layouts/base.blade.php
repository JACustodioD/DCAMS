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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="/img/icono-dental.png" rel="shortcut icon" type="image/x-icon" />

</head>
<body >

<!--MENU PRINC-->
<header>
    <div class="container-fluid menu-padding">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded menu-margin ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup" >
             <div class="navbar-nav d-flex justify-content-end" style="width: 100%">
                <div class="d-flex justify-content-start text-phone" style="width: 50%;">
                    <h6 class="pl-3"><i class="fas fa-phone icon-head"></i>553-22-09 / 552-33-01</h6>
                </div>
                 <a class="nav-item nav-link hvr-bounce-to-bottom link-menu " href="#">Inicio <span class="sr-only">(current)</span></a>
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
<section>
    <div class="container-fluid ">
        <div class="row  d-flex align-items-center">
            <div class="col-md-1 col-4  icon-dental">
                <img src="/img/icono-dental.png" alt="icono-dental" width="100" height="100">
            </div>
            <div class="col-md-5 col-8 text-slogan">
                    <h3 class="slogan pl-3"> <strong id="letter-blue">C</strong>reamos sonrísas</h3>
                    <p class="slogan pl-3 ">Mejoramos tu vida</p>
            </div>
            <div class="col-md-6 d-flex justify-content-end text-redes">
                <p class="text-siguenos mr-2">Síguenos |  </p>
                <a href=""><i class="fab fa-twitter-square icon-head hvr-grow-rotate"></i></a>
                <a href=""><i class="fab fa-facebook-square icon-head hvr-grow-rotate"></i></a>
                <a href=""><i class="fab fa-instagram icon-head hvr-grow-rotate"></i></a>
            </div>
        </div>
    </div>
</section>

     <!--Content-->
         @yield('content')
     <!-- /Content -->


     <footer class="container-fluid">
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
     <footer class="container-fluid">
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
