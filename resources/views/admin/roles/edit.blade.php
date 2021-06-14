@extends('admin.layouts.dashboard')

@section('content')

<title>Actualizar | Roles</title>

<h1>Actualizar rol</h1>

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

<form method="POST" action="/roles/{{$role->id}}">
    @csrf
    @method('PATCH')
    
    <div class="form-group">
        <label for="role_name">Nombre del rol</label>
        <input type="text" name="role_name" class="form-control" id="role_name" placeholder="Nombre del rol..." value="{{$role->name}}" required>
    </div>
    <div class="form-group">
        <label for="role_slug">Slug del rol</label>
        <input type="text" name="role_slug" tag="role_slug" class="form-control" id="role_slug" placeholder="Slug del rol..." value="{{$role->slug}}" required>
    </div>
    <div class="form-group" >
        <label for="roles_permissions">Permisos (separados por comas sin espacios, Ej. Crear,Borrar,Ver...)</label>
        <input type="text" data-role="tagsinput" name="roles_permissions" class="form-control" id="roles_permissions" value="@foreach ($role->permissions as $permission)
            {{$permission->name. ","}}
        @endforeach">      
    </div>     

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </div>
</form>

@section('css_role_page')
    <link rel="stylesheet" href="/css/admin/bootstrap-tagsinput.css">
@endsection

@section('js_role_page')
    <script src="/js/admin/bootstrap-tagsinput.js"></script>

    <script>

        $(document).ready(function(){
            $('#role_name').keyup(function(e){
                var str = $('#role_name').val();
                str = str.replace(/\W+(?!$)/g, '-').toLowerCase();//cambia los espacios por guiones
                $('#role_slug').val(str);
                $('#role_slug').attr('placeholder', str);
            });
        });
        
    </script>

@endsection

@endsection