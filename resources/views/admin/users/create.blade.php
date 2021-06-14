@extends('admin.layouts.dashboard')

@section('content')

<title>Crear | Usuarios</title>

<h1>Crear nuevo usuario</h1>

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

<form method="POST" action="/users" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="name">Usuario</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Usuario..." value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email..." value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña..." required minlength="8">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Contraseña..." id="password_confirmation">
    </div>
    <div class="form-group">
        <label for="role">Seleccionar rol</label>
        <select class="role form-control" name="role" id="role">
            <option value="">Seleccionar rol...</option>
            @foreach ($roles as $role)
            <option data-role-id="{{$role->id}}" data-role-slug="{{$role->slug}}" value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
    
    <div id="permissions_box" >
        <label for="roles">Seleccionar permisos</label>
        <div id="permissions_ckeckbox_list"></div>
    </div>     

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Crear">
    </div>
</form>    

@section('js_user_page')

    <script>

        $(document).ready(function(){
            var permissions_box = $('#permissions_box');
            var permissions_ckeckbox_list = $('#permissions_ckeckbox_list');

            permissions_box.hide(); // hide all boxes


            $('#role').on('change', function() {
                var role = $(this).find(':selected');    
                var role_id = role.data('role-id');
                var role_slug = role.data('role-slug');

                permissions_ckeckbox_list.empty();

                $.ajax({
                    url: "/users/create",
                    method: 'get',
                    dataType: 'json',
                    data: {
                        role_id: role_id,
                        role_slug: role_slug,
                    }
                }).done(function(data) {
                    
                    console.log(data);
                    
                    permissions_box.show();                        
                    // permissions_ckeckbox_list.empty();

                    $.each(data, function(index, element){
                        $(permissions_ckeckbox_list).append(       
                            '<div class="custom-control custom-checkbox">'+                         
                                '<input class="custom-control-input" type="checkbox" name="permissions[]" id="'+ element.slug +'" value="'+ element.id +'">' +
                                '<label class="custom-control-label" for="'+ element.slug +'">'+ element.name +'</label>'+
                            '</div>'
                        );

                    });
                });
            });
        });

    </script>

@endsection

@endsection