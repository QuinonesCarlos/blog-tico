@extends('layouts.app')

@section('content')

<head>
    <title>TicOSolutions | Recuperar</title>
</head>

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Recuperar contraseña</h5>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form-signin" method="POST" action="{{ route('password.email') }}">
                @csrf
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="" required autocomplete="email">
                <label for="inputEmail">E-mail</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Recuperar contraseña</button>
              <a class="d-block text-center mt-2 small" href="/login">O también puede ingresar</a>
              <hr class="my-4">        
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection