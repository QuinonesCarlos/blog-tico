@extends('layouts.app')

@section('content')

<head>
    <title>TicOSolutions | Blog</title>
</head>

    <header class="masthead" style="background-image: linear-gradient(rgba(3, 28, 255, 0.664),rgba(168, 240, 206, 0.63)), url('{{ asset('/storage/images/posts_images/'.$post['image_url']) }}')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="site-heading">
                <h1>{{$post['titulo']}}</h1>
                <span class="subheading">Por {{ $post->user['name'] }}, 
                  el {{getShorterString($post['created_at'], 10)}}</span>
              </div>
            </div>
          </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <p class="parrafo">Categoría:
          {{$post['categoria']}}
        </p>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <p>{!!$post['contenido']!!}</p>
        </div>
    </div>
    </div>

    <hr>

@endsection