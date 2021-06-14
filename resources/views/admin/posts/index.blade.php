@extends('admin.layouts.dashboard')

@section('content')

<title>Administración | Posts</title>
    
    {{-- <h1>Administración de Posts</h1> --}}

    <div class="row py-lg-2">
        <div class="col-md-6">
            <h2>Administración de Posts</h2>
        </div>
        {{-- @cannot('isEditor') --}}
            @can('create', App\Post::class)
                <div class="col-md-6">
                    <a href="/posts/create" class="btn btn-primary btn-lg float-md-right" role="button"aria-pressed="true">Crear post</a>
                </div>
            @endcan
        {{-- @endcannot --}}
    </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-table"></i>
            Lista de Posts</div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>ID</th>
                    {{-- <th>Fecha</th> --}}
                    <th>Categoría</th>
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Imagen</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        {{-- <th>Fecha</th> --}}
                        <th>Categoría</th>
                        <th>Título</th>
                        <th>Contenido</th>
                        <th>Imagen</th>
                        <th>Autor</th>
                        <th>Editar</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            {{-- <td>{{ $post->created_at }}</td> --}}
                            <td>{{ $post->categoria }}</td>
                            <td>{{ $post->titulo }}</td>
                            <td>{!! getShorterString($post['contenido'], 60) !!}</td>
                            <td><img src="{{ asset('/storage/images/posts_images/'.$post['image_url']) }}" alt="{{ $post['image_url'] }}" width="100"></td>
                            <td>{{ $post->user['name'] }}</td>
                            <td>
                                <center>
                                    <a href="/posts/{{ $post['id'] }}"><i class="fa fa-eye"></i></a>
                                    {{-- @can('edit', $post) --}}
                                    {{-- @cannot('isRedactor') --}}
                                        @can('edit', $post)
                                            <a href="/posts/{{ $post['id'] }}/edit"><i class="fa fa-edit"></i></a>
                                        @endcan
                                        @can('delete', $post)
                                            <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{$post['id']}}"><i class="fas fa-trash-alt"></i></a>
                                        @endcan
                                    {{-- @endcannot --}}
                                    @if ($post->publicado)                                     
                                        <span>
                                            <i class="fa fa-check-square" style="color:green"></i>                                                                                      
                                        </span>
                                    @endif
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
            {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
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
                <div class="modal-body">Seleccione "Eliminar" si realmente quiere eliminar este post.</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="/posts/">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="post_id" name="post_id" value="">
                    <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Eliminar</a>
                </form>
                </div>
            </div>
            </div>
        </div>

@endsection

@section('js_post_page')
    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var post_id = button.data('postid') 
            
            var modal = $(this)
            modal.find('.modal-footer #post_id').val(post_id);
            modal.find('form').attr('action','/posts/' + post_id);
        })
    </script>
@endsection