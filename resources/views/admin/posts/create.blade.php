@extends('admin.layouts.dashboard')

@section('content')

<title>Crear | Posts</title>

<h1>Crear nuevo post</h1>

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

<form method="POST" action="/posts" enctype="multipart/form-data">
    
    {{-- protege el formulario para evitar que se use sin permiso TOKEN--}}
    @csrf 
    
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Título..." value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="categoria">Categoría</label>
        <select name="categoria" class="form-control" id="categoria" value="{{ old('categoria') }}">
            <option value="">Seleccionar categoría...</option>
            <option value="Diseño gráfico">Diseño gráfico</option>
            <option value="Gaming">Gaming</option>
            <option value="Programación">Programación</option>
            <option value="Tecnología">Tecnología</option>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Seleccionar imagen</label>
        <input type="file" name="image" class="form-control-file" id="image">
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea name="post_content" id="content">{{ old('post_content') }}</textarea>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Crear">
    </div>
</form>

<script>
    CKEDITOR.replace( 'post_content' );
</script>

@endsection