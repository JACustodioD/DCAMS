@extends('layouts.user')

@section('content')
<section class="container">
        <div class="submenu">
            <div class="row">
              <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link hvr-underline-from-right"  data-scroll href="#tratamientos">Tratamientos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link hvr-underline-from-right "  data-scroll href="#citas">Citas</a>
                </li>
               </ul>
              </div>
            </div>
        </div>
</section>
<section class="container mt-5">
    <div class="bienvenida">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenido(a) <span class="text-info">{{Auth::user()->name}}</span> a tu consultorio dental Amy</h3>
            </div>
        </div>
        <div class="container mt-5 cont-form">
             <div class="row">
                <div class="col-md-3">
                    <div class="profile-photo text-center">
                        <img src="/perfil/{{Auth::user()->image}}" alt="foto-perfil" width="100%" height="100%">
                    </div>
                </div>
               </div>
              <div class="row">
                <div class="col-md-4">
                    <form action="/pacientes/image" method="post" enctype="multipart/form-data">
                   @csrf
                      <br>
                        <input type=file size=100 name="perfil" required class="@error('perfil') is-invalid @enderror">

                        @error('perfil')
                          <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-2">Guardar cambios</button>
                    </form>
                </div>
              </div>

             <!--FORMULARIO-->
             <form class="mt-5">
                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="name">Nombre de usuario:</label>
                      <input type="text" class="form-control" id="name" disabled value="{{Auth::user()->userName}}">
                   </div>

                    <div class="form-group col-md-8">
                        <label for="name">Nombre completo:</label>
                        <input type="text" class="form-control" id="name" disabled value="{{Auth::user()->fullName}}">
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
                        <input type="text" class="form-control" id="pacient" disabled value="{{Str::limit(Auth::user()->created_at,10,'')}}">
                     </div>

                 </div>

             </form>
        </div>
    </div>
</section>

<section class="container" id="tratamientos">
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
        @if(sizeOf($treatments)>0)
          @foreach ($treatments as $treatment)
          <span hidden>{{$cont++}}</span>
          <!-- Accordion card -->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header p-0 z-depth-1 head-tratamientos" role="tab" id="heading3{{$cont}}">
              <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse3{{$cont}}" aria-expanded="true"
                aria-controls="collapse3{{$cont}}">
                <i aria-hidden="true"></i>
                <h4 class="text-uppercase white-text mb-0 py-3 mt-1 text-tratamientos ml-3"><i class="fas fa-tooth"></i>
                  {{ $treatment->serviceName}}
                </h4>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapse3{{$cont}}" class="collapse " role="tabpanel" aria-labelledby="heading3{{$cont}}"
              data-parent="#accordionEx5">
              <div class="card-body rgba-black-light white-text z-depth-1">
              	 <p class=" mb-0">
                  Descripción del tratamiento: <b> {{$treatment->serviceDescription}}</b>
                </p>
                <p class=" mb-0">
                  Este tratamiento tiene un costo de: <b> ${{$treatment->total}}</b>
                </p>
                <p class=" mb-0">
                  Fecha de inicio de tratamiento: <b> {{date('d-m-Y',strtotime($treatment->startDate)) }}</b>
                </p>
                <p class=" mb-0">
                  Fecha de finalización de tratamiento: <b> {{date('d-m-Y',strtotime($treatment->endDate)) }}</b>
                </p>

              </div>
            </div>
          </div>
          <!-- /Accordion card -->
          @endforeach

        @else
        <div class="row">
           <div class="col-md-12 text-center">
              <figure class="figure">
                 <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="300" width="300">
                  <figcaption class="figure-caption"> <h4 class="text-light text-ups"> <b> ¡UPS! </b> <br> Aún no tienes tratamientos.</h4>  </figcaption>
               </figure>
           </div>
        </div>

        @endif
      </div>
      <!--/Accordion wrapper-->

    </div>
  </div>
</div>
<!-- Content -->
</div>
<!-- Card -->
</section>


<section class="container" id="citas">
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
      @if(sizeOf($dates)>0)
        @foreach ($dates as $date)
            <div class="col-md-6">
                  <div class="jumbotron">
                      <h3>Próxima cita: {{date('d-m-Y',strtotime($date->dateOfAppointment))}}</h3>
                      <p class="lead">Hora: {{ $date->hour }}</p>
                      <p class="lead">Consulta: {{ $date->affair }}</p>
                      <hr class="my-4">
                      <p>Recuerde llegar con 15 minutos de anticipación a su cita.</p>
                      @if(strcmp($date->status,'Pendiente')!=0)

                        @if(strcmp($date->status,'Cancelada')==0)
                          <p class="text-danger"><b>{{$date->status}}: </b>{{$date->commentary}}</p>
                        @else
                          <p class="text-success"><b>{{$date->status}}: </b>{{$date->commentary}}</p>
                        @endif

                      @endif
                    </div>
              </div>
        @endforeach
      @else
        <div class="row">
            <div class="col-md-12 text-center">
                <figure class="figure">
                     <img src="/img/diente.png" class="figure-img img-fluid rounded" alt="ups" height="150" width="150">
                     <figcaption class="figure-caption"> <h3 class="text-primary text-ups"> <b> ¡UPS! </b> <br> Aún no tienes citas médicas.</h3>  </figcaption>
                 </figure>
             </div>
        </div>
      @endif
    </div>
  </div>
</section>
@endsection
@section('script')
    <script src="/js/smooth-scroll.min.js"></script>

    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            // Selectors
            ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
            header: null, // Selector for fixed headers (must be a valid CSS selector)
            topOnEmptyHash: true, // Scroll to the top of the page for links with href="#"

            // Speed & Duration
            speed: 800, // Integer. Amount of time in milliseconds it should take to scroll 1000px
            speedAsDuration: false, // If true, use speed as the total duration of the scroll animation
            durationMax: null, // Integer. The maximum amount of time the scroll animation should take
            durationMin: null, // Integer. The minimum amount of time the scroll animation should take
            clip: true, // If true, adjust scroll distance to prevent abrupt stops near the bottom of the page
            offset:25 /* function (anchor, toggle) {

                // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
                // This example is a function, but you could do something as simple as `offset: 25`

                // An example returning different values based on whether the clicked link was in the header nav or not
                if (toggle.classList.closest('.my-header-nav')) {
                    return 25;
                } else {
                    return 50;
                }

            }*/,

            // Easing
            easing: 'easeInOutCubic', // Easing pattern to use
            customEasing: function (time) {

                // Function. Custom easing pattern
                // If this is set to anything other than null, will override the easing option above

                // return <your formulate with time as a multiplier>

                // Example: easeInOut Quad
                return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

            },

            // History
            updateURL: true, // Update the URL on scroll
            popstate: true, // Animate scrolling with the forward/backward browser buttons (requires updateURL to be true)

            // Custom Events
            emitEvents: true // Emit custom events

        });
    </script>
 @endsection
