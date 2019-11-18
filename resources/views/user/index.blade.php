@extends('layouts.user')

@section('content')

<section class="container mt-5">
    <div class="bienvenida">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenido(a) <span class="text-info">{{Auth::user()->name}}</span> a tu consultorio dental Amy</h3>
            </div>
        </div>
        <section class="container">
        <div class="submenu">
            <div class="row">
              <div class="col-md-12">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Tratamientos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Citas</a>
                </li>
              </ul>
              </div>
            </div>
        </div>
    </section>
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
                        <input type="text" class="form-control" id="name" disabled value="{{Auth::user()->name}}">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="lastname">Apellidos:</label>
                        <input type="text" class="form-control" id="lastname" value="ni idea" disabled>
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <label for="age">Fecha de nacimiento:</label>
                         <input type="date" class="form-control" id="age" disabled value="{{Auth::user()->dateOfBirth}}">
                     </div>
                     <div class="form-group col-md-6">
                         <label for="phone">Teléfono:</label>
                         <input type="text" class="form-control" id="phone" disabled value="{{Auth::user()->phone}}">
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="adress">Dirección:</label>
                     <input type="text" class="form-control" id="adress" disabled value="{{Auth::user()->address}}">
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="inputCity">Correo:</label>
                        <input type="email" class="form-control" id="email" disabled value="{{Auth::user()->email}}">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="pacient">Paciente desde:</label>
                        <input type="text" class="form-control" id="pacient" disabled value="{{Auth::user()->created_at}}">
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
              <i aria-hidden="true"></i>
              <h4 class="text-uppercase white-text mb-0 py-3 mt-1 text-tratamientos ml-3"><i class="fas fa-tooth"></i>
                TRATAMIENTO DE BRAKETS
              </h4>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapse30" class="collapse show" role="tabpanel" aria-labelledby="heading30"
            data-parent="#accordionEx5">
            <div class="card-body rgba-black-light white-text z-depth-1">
              <p class=" mb-0">
                Este tratamiento tiene un costo de: <b> $15,000</b>
              </p>
              <p class=" mb-0">
                Fecha de inicio de tratamiento: <b> 12/11/2019</b>
              </p>
              <p class=" mb-0">
                Actividad de cita anterior: <b> Se cambiaron ligas de color</b>
              </p>
                
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
         
              <h4 class="text-uppercase white-text mb-0 py-3 mt-1 text-tratamientos ml-3"><i class="fas fa-tooth"></i>
                LIMPIEZA DENTAL
              </h4>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="heading31"
            data-parent="#accordionEx5">
            <div class="card-body rgba-black-light white-text z-depth-1">
            <p class=" mb-0">
                Este tratamiento tiene un costo de: <b> $15,000</b>
              </p>
              <p class=" mb-0">
                Fecha de inicio de tratamiento: <b> 12/11/2019</b>
              </p>
              <p class=" mb-0">
                Actividad de cita anterior: <b> Se cambiaron ligas de color</b>
              </p>
             
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
              
              <h4 class="text-uppercase white-text mb-0 py-3 mt-1 text-tratamientos ml-3"><i class="fas fa-tooth"></i>
                RECINAS DE ALTA ESTETICA
              </h4>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapse32" class="collapse" role="tabpanel" aria-labelledby="heading32"
            data-parent="#accordionEx5">
            <div class="card-body rgba-black-light white-text z-depth-1">
            <p class=" mb-0">
                Este tratamiento tiene un costo de: <b> $15,000</b>
              </p>
              <p class=" mb-0">
                Fecha de inicio de tratamiento: <b> 12/11/2019</b>
              </p>
              <p class=" mb-0">
                Actividad de cita anterior: <b> Se cambiaron ligas de color</b>
              </p>
              
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
        <h1 class=" pl-5 mt-5 mb-5 title-citas">Citas</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 pl-5 col-calendar">
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


@endsection
