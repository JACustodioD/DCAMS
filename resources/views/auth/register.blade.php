@extends('layouts.app')

@section('content') 
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <div class="row">
                <div class="col-md-4">
                    <img src="/img/icono-dental.png" alt="" height="150" width="150" class="mb-4">
                </div>
            </div>
            <div class="card">
              <h1 class="text-center">Registrate</h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name" class="col-form-label">{{ __('Nombre de usuario') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                             <div class="form-group  col-md-6">
                                <label for="dateOfBirth" class="col-form-label ">{{ __('Fecha de nacimiento') }}</label>
                                <input id="dateOfBirth" type="date" class="form-control @error('dateOfBirth') is-invalid @enderror" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required autocomplete="dateOfBirth" >

                                @error('dateOfBirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="phone" class="col-form-label ">{{ __('Número de teléfono') }}</label>
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" >
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <label for="address" class="col-form-label">{{ __('Dirección') }}</label>
                                <input type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address') }}" required autofocus autocomplete="address">
                                
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email" class=" col-form-label ">{{ __('Correo electrónico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>

                            <div class="form-group col-md-4">
                                <label for="password" class=" col-form-label ">{{ __('Constraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="password-confirm" class=" col-form-label ">{{ __('Confirmar contraseña') }}</label>                        
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                       
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Regístrarse') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-login d-flex align-items-center">
            <h1 class=" text-image-login display-5">Forma parte de nosotros <br> ¡Regístrate ahora!</h1> 
        </div>
    </div>
</div>
@endsection
