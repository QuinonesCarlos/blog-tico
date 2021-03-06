@extends('admin.layouts.dashboard')

@section('content')

<title>Administración | Roles</title>

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Administración de roles</h2>
    </div>
    <div class="col-md-6">
        <a href="/roles/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Añadir rol</a>
    </div>
</div>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Lista de roles</div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>Rol</th>
                <th>Slug</th>
                <th>Permisos</th>
                <th>Editar</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Rol</th>
                <th>Slug</th>
                <th>Permisos</th>
                <th>Editar</th>
            </tr>
            </tfoot>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role['id'] }}</td>
                        <td>
                            <span class="badge badge-primary">
                                {{ $role->name }}
                        </td>
                        <td>{{ $role['slug'] }}</td>
                        <td>
                            @if ($role->permissions != null)
                                    
                                @foreach ($role->permissions as $permission)
                                <span class="badge badge-success">
                                    {{ $permission->name }}                                    
                                </span>
                                @endforeach
                            
                            @endif
                        </td>
                        <td>
                            <center>
                                {{-- <a href="/roles/{{ $role['id'] }}"><i class="fa fa-eye"></i></a> --}}
                                <a href="/roles/{{ $role['id'] }}/edit"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="modal" data-target="#deleteModal" data-roleid="{{$role['id']}}"><i class="fas fa-trash-alt"></i></a>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Está seguro de querer eliminar esto?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">Seleccione "Eliminar" si realmente quiere eliminar este rol.</div>
        <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="">
            @method('DELETE')
            @csrf
            {{-- COMENTADO<input type="hidden" id="role_id" name="role_id" value=""> --}}
            <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Eliminar</a>
        </form>
        </div>
    </div>
    </div>
</div>

@section('js_role_page')

<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var role_id = button.data('roleid') 
        
        var modal = $(this)
        // modal.find('.modal-footer #role_id').val(role_id)
        modal.find('form').attr('action','/roles/' + role_id);
    })
</script>

@endsection


@endsection