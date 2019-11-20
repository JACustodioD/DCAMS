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
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/calendar.css">
</head>
</head>
<body>
<header class="container " style="width: 100%;">
    <div class="encabezado ">
        <div class="row ">  
             <div class="col-md-12">
                 <nav class="navbar navbar-expand-md navbar-light menu">
                     <a class="navbar-brand" href="/"><img src="/img/icono-dental.png " class="icono" alt="logo"></a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                         </button>
                         <div class="collapse navbar-collapse" id="navbarNav">
                             <ul class="navbar-nav menu-list">
                                <li class="nav-item">
                                  <a class="nav-link hvr-underline-from-center" href="/home"><i class="fas fa-user icon-menu mr-1"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link hvr-underline-from-center" href="/historiamedica"><i class="fas fa-notes-medical icon-menu mr-1"></i>Historia Médica</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link hvr-underline-from-center" href="historialdepagos"><i class="fas fa-dollar-sign icon-menu mr-1"></i>Historial de pagos</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link hvr-underline-from-center" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt icon-menu mr-1"></i>Cerrar sesión</a>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                               
                                </li>
                              </ul>
                         </div>
                 </nav>
                </div>
            </div>
            </div>
        </div>
    </div>
</header>



@yield('content')



<!--SCRIPT-->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/calendar.js"></script>
<script src="/js/all.js"></script>  
@yield('script')
</body>
</html>