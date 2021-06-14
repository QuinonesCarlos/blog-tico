@extends('admin.layouts.dashboard')

@section('content')

<title>Editar | Posts</title>

<h1>Editar posts</h1>

@canany(['isAdmin', 'isEditor'])
<div class="publish-checkbox" style="float:right">
    <label for="publish-post">Publicar post</label>
    <input type="checkbox" id="publish-post" {{$post->publicado ? 'checked=checked' : '' }}>
</div>
@endcanany

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            <li>Revisa que hayas llenado correctamente todos los campos.</li> 
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/posts/{{ $post->id }}" enctype="multipart/form-data">
    {{-- Cambia el metodo post a metodo patch --}}
    @method('PATCH')

    {{-- protege el formulario para evitar que se use sin permiso TOKEN--}}
    @csrf 
    
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Título..." value="{{ $post->titulo }}">
    </div>
    <div class="form-group">
        <label for="categoria">Categoría</label>
        <select name="categoria" class="form-control" id="categoria" value="{{ $post->categoria }}">
            <option value="Diseño gráfico">Diseño gráfico</option>
            <option value="Gaming">Gaming</option>
            <option value="Programación">Programación</option>
            <option value="Tecnología">Tecnología</option>
        </select>
    </div>
    <label for="image">Seleccionar imagen</label>
    <input type="file" name="image" class="form-control-file" id="profile-img" value="{{$post->image}}">
    <div class="row">
        <img src="{{ asset('/storage/images/posts_images/'.$post->image_url) }}" id="profile-img-tag" class="img-thumbnail mx-auto" alt="{{$post->image_url}}" width="250" >
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea name="post_content" id="content">{{ $post->contenido }}</textarea>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </div>
</form>

@section('js_post_page')

    <script>
        
        CKEDITOR.replace( 'post_content' );

        $(function() {

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function (e) {
                        $('#profile-img-tag').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
            $("#profile-img").change(function(){
                readURL(this);
            });

        });

        $(document).ready(function(){    
            $('#publish-post').on('click', function(event) {
                // event.preventDefault();

                if ($("#publish-post").is(":checked")){
                    var checked = 1;
                }else{
                    var checked = 0;
                }
                $.ajax({
                    url: "/posts/{{$post->id}}",
                    method: 'get',
                    dataType: 'json',
                    data: {
                        task: {
                            id: "{{$post->id}}",
                            checked: checked
                        }
                    }
                }).done(function(data) {
                    console.log(data);
                });
            });
            
        });


    </script>
    
@endsection

@endsection