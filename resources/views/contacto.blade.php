@extends('layouts.app')

@section('content')

<head>
  <title>TicOSolutions | Contacto</title>
</head>

<!-- Page Header -->
<header class="masthead" style="background-image: linear-gradient(rgba(3, 28, 255, 0.664),rgba(168, 240, 206, 0.63)), url('/img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Contacto</h1>
            <span class="subheading">¿Tienes preguntas? Nosotros respuestas</span>
            <br>
            <a href="mailto:c.j.q.h.99@gmail.com" class="btn btn-primary">Charlemos</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  {{-- <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto"> --}}
        {{-- <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p> --}}
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        {{-- <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Por favor ingresa tu e-mail">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Phone Number</label>
              <input type="tel" class="form-control" placeholder="Número de teléfono" id="phone" required data-validation-required-message="Por favor ingresa tu número de teléfono">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Message</label>
              <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor escribe tu mensaje"></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Envíar</button>
        </form> --}}
        {{-- <section id="que-esperas">
          <div class="contenedor">
              <h3>¿Qué esperas para trabajar con nosotros?</h3>
              <a href="mailto:c.j.q.h.99@gmail.com">Charlemos</a>
          </div>
      </section>
      </div>
    </div> --}}
  {{-- </div> --}}

  {{-- <hr> --}}

@endsection('content')