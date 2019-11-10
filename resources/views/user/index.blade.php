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
             <div class="row d-flex justify-content-center">    
                <div class="col-md-3">
                    <div class="profile-photo text-center">
                        <span>Foto de perfil</span>
                    </div>
                </div>
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

<section class="container ">
    <div class="tratamientos pl-4 ">
       <div class="row">
            <div class="col-md-12 mt-5">
                <h3>Tratamientos</h3>
            </div>
       </div>
       <div class="row">
            <div class="col-md-11">
                    <div class="accordion" id="accordionExample">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Tratamiento de ortodoncia
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Extracción de muela
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Blanqueamiento dental y curetaje
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>
                          </div>
            </div>
        </div> 
    </div>  
        
</section>


<!--SCRIPT-->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/all.js"></script>  
</body>
</html>