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
                                  <a class="nav-link hvr-underline-from-center" href="#"><i class="fas fa-user icon-menu mr-1"></i>Mi perfil</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link hvr-underline-from-center" href="#"><i class="fas fa-notes-medical icon-menu mr-1"></i>Tratamientos</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link hvr-underline-from-center" href="#"><i class="fas fa-clock icon-menu mr-1"></i>Citas</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link hvr-underline-from-center" href="#"><i class="fas fa-sign-out-alt icon-menu mr-1"></i>Cerrar sesión</a>
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
<section class="container mt-5">
    <div class="bienvenida">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenido(a) a tu consultorio dental Amy</h3>
            </div>
        </div>
        <div class="container mt-5 cont-form">
             <div class="row">    
                <div class="col-md-3">
                    <div class="profile-photo text-center">
                        <span>Foto de perfil</span>
                    </div>
                </div>
               </div>
              <div class="row">
                <div class="col-md-3">
                    <form method="post" enctype="multipart/form-data"><br>
                        <input type=file size=100 name="file1">     
                    </form>
                </div>
              </div>
            
             <!--FORMULARIO-->
             <form class="mt-5">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre(s):</label>
                        <input type="text" class="form-control" id="name">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="lastname">Apellidos:</label>
                        <input type="text" class="form-control" id="lastname">
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <label for="age">Fecha de nacimiento:</label>
                         <input type="date" class="form-control" id="age">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="phone">Teléfono:</label>
                         <input type="password" class="form-control" id="phone">
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="adress">Dirección:</label>
                     <input type="text" class="form-control" id="adress">
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="inputCity">Correo:</label>
                        <input type="email" class="form-control" id="email">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="pacient">Paciente desde:</label>
                        <input type="text" class="form-control" id="pacient">
                     </div>
                 </div>
                    <div class="form-group col-md-12 text-center">
                         <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>    
             </form>
        </div>
    </div>
</section>

<section class="container">
  <!-- Card -->
<div class="card card-image tratamientos">
<h1 class="pl-4 title-tratamientos text-center mt-5">Tratamientos</h1>
<!-- Content -->
<div class="rgba-black-strong py-5 px-4">
  <div class="row d-flex justify-content-end">
    <div class="col-md-10 col-xl-8">

      <!--Accordion wrapper-->
      <div class="accordion md-accordion accordion-5" id="accordionEx5" role="tablist"
        aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card mb-4">

          <!-- Card header -->
          <div class="card-header p-0 z-depth-1 head-tratamientos" role="tab" id="heading30">
            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse30" aria-expanded="true"
              aria-controls="collapse30">
              <i class="fas fa-cloud fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
              <h4 class="text-uppercase white-text mb-0 py-3 mt-1"><i class="fas fa-tooth"></i>
                TRATAMIENTO DE BRAKETS
              </h4>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapse30" class="collapse show" role="tabpanel" aria-labelledby="heading30"
            data-parent="#accordionEx5">
            <div class="card-body rgba-black-light white-text z-depth-1">
              <p class="p-md-4 mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et.</p>
                <div class="d-flex justify-content-end">
                 <button type="button" class="btn btn-outline-dark">Ver Detalles</button>
               </div>
            </div>
          </div>
        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->
        <div class="card mb-4">

          <!-- Card header -->
          <div class="card-header p-0 z-depth-1 head-tratamientos" role="tab" id="heading31">
            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse31" aria-expanded="true"
              aria-controls="collapse31">
              <i class="fas fa-comment-alt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
              <h4 class="text-uppercase white-text mb-0 py-3 mt-1"><i class="fas fa-tooth"></i>
                LIMPIEZA DENTAL
              </h4>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="heading31"
            data-parent="#accordionEx5">
            <div class="card-body rgba-black-light white-text z-depth-1">
              <p class="p-md-4 mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et.</p>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-dark">Ver Detalles</button>
                </div>
            </div>
          </div>
        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->
        <div class="card mb-4">

          <!-- Card header -->
          <div class="card-header p-0 z-depth-1 head-tratamientos" role="tab" id="heading32">
            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse32" aria-expanded="true"
              aria-controls="collapse32">
              <i class="fas fa-cogs fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
              <h4 class="text-uppercase white-text mb-0 py-3 mt-1"><i class="fas fa-tooth"></i>
                RECINAS DE ALTA ESTETICA
              </h4>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapse32" class="collapse" role="tabpanel" aria-labelledby="heading32"
            data-parent="#accordionEx5">
            <div class="card-body rgba-black-light white-text z-depth-1">
              <p class="p-md-4 mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                terry richardson ad squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et.</p>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-dark">Ver Detalles</button>
                </div>
            </div>
          </div>
        </div>
        <!-- Accordion card -->
      </div>
      <!--/.Accordion wrapper-->

    </div>
  </div>
</div>
<!-- Content -->
</div>
<!-- Card --> 
</section>
<section class="container">
  <div class="citas">
    <div class="row">
      <div class="col-md-12">
        <h1 class=" pl-5 mt-5 mb-5">Citas</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 pl-5">
        <div class="calendar calendar-first" id="calendar_first">
          <div class="calendar_header">
            <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
               <h2></h2>
              <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
           </div>
          <div class="calendar_weekdays"></div>
         <div class="calendar_content"></div>
      </div>
      </div>
      <div class="col-md-6">
          <div class="jumbotron">
              <h3>Próxima cita: 15/Noviembre/2019</h3>
              <p class="lead">Hora: 12:30</p>
              <p class="lead">Consulta: Limpieza de dientes</p>
              <hr class="my-4">
              <p>Recuerde llegar con 15 minutos de anticipación a su cita.</p>
            </div>
      </div>
    </div>
  </div>
</section>

<!--SCRIPT-->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/calendar.js"></script>
<script src="/js/all.js"></script>  
</body>
</html>