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
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/calendar.css">
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                <li class="nav-item nav-text">
                                  <a class="nav-link  hvr-underline-from-center text-primary" href="/"><i class="far fa-comment  mr-1 "></i>Mensajes</a>
                                </li>
                                <li class="nav-item nav-text">
                                  <a class="nav-link hvr-underline-from-center text-primary" href="/consultorio/pacientes"><i class="fas fa-users  mr-1"></i></i>Pacientes</a>
                                </li>
                                <li class="nav-item nav-text">
                                  <a class="nav-link hvr-underline-from-center text-primary" href="/consultorio/miscitas"><i class="fas fa-calendar-check  mr-1"></i></i>Citas</a>
                                </li>
                                <li class="nav-item nav-text">
                                   <a class="nav-link hvr-underline-from-center text-primary" href="{{ route('logout') }}"
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
</body>
</html>