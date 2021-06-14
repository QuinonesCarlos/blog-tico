@extends('layouts.app')

@section('content')

<head>
  <title>TicOSolutions | FAQ</title>
</head>

<!-- Page Header -->
<header class="masthead" style="background-image: linear-gradient(rgba(3, 28, 255, 0.664),rgba(168, 240, 206, 0.63)), url('/img/faq.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>FAQ</h1>
            <span class="subheading">Preguntas frecuentes</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2>¿Cómo creo mi cuenta?</h2>
          <p>De momento, la creación de cuentas está habilitada solo para personal del blog.</p>
        <h2>¿Qué es un blog?</h2>
          <p>Un weblog, también conocido como blog o bitácora (listado de sucesos), es un sitio web periódicamente actualizado que recopila cronológicamente textos o artículos de uno o varios autores donde el más reciente aparece primero, con un uso o temática en particular, siempre conservando el autor la libertad de dejar publicado lo que crea pertinente.</p>
        <h2>¿Cómo me puedo contactar?</h2>
          <p>Desde la sección de "Contacto", por medio de un correo electrónico.</p>
        </div>
    </div>
  </div>

  <hr>

@endsection('content')