@extends('layouts.app')

@section('content')

<head>
  <title>TicOSolutions | Blog</title>
</head>
  
  <!-- Page Header -->
  <header class="masthead" style="background-image: linear-gradient(rgba(3, 28, 255, 0.664),rgba(168, 240, 206, 0.63)), url('/static/imagenes/fondo4.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Blog</h1>
            <span class="subheading">Tecnología, Gaming, Programación y más...</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="row">

          @foreach ($posts as $post)
          <div class="col-md-4">
            <img class="img-thumbnail mt-4" width="100%" src="{{ asset('/storage/images/posts_images/'.$post['image_url']) }}" alt="post_image">
          </div>
          <div class="col-lg-8">
              <div class="post-preview">
                <a href="/home/{{$post['id']}}">
                  <h2 class="post-title">
                    {{$post['titulo']}}
                  </h2>
                </a>
                <h3 class="post-subtitle">
                  {!! getShorterString($post['contenido'], 100) !!}
                </h3>
                <p class="post-meta">Categoría:
                  {{$post['categoria']}} <br>
                  Publicado por
                  <a href="#">{{$post->user['name']}}</a>
                  el {{getShorterString($post['created_at'], 10)}}
                </p>
              </div>          
          </div>
          <hr>
          @endforeach

      </div>

      <!-- Pager -->
      {{ $posts->links() }}

    </div>
  </div>

  <hr>

@endsection('content')