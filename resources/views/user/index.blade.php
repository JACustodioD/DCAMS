@extends('layouts.user')

@section('content')

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

@endsection