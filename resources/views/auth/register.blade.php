@extends('layouts.app')

@section('content')

<head>
    <title>TicOSolutions | Registrarse</title>
</head>

<!-- Page Header -->
<header class="masthead" style="background-image: linear-gradient(rgba(3, 28, 255, 0.664),rgba(168, 240, 206, 0.63)), url('/img/faq.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Lo sentimos</h1>
          <span class="subheading">De momento esta opción está deshabilitada</span>
          <br>
            <a href="/" class="btn btn-primary">Regresar</a>
        </div>
      </div>
    </div>
  </div>
</header>

{{-- <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Registrarse</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="" required autocomplete="name" autofocus>
                <label for="inputUserame">Username</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="" required autocomplete="email">
                <label for="inputEmail">E-mail</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="" required autocomplete="new-password">
                <label for="inputPassword">Contraseña</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="" name="password_confirmation" required autocomplete="new-password">
                <label for="inputConfirmPassword">Confirmar contraseña</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrarse</button>
              <a class="d-block text-center mt-2 small" href="/login">Ingresar</a>
              <hr class="my-4">        
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  @endsection
