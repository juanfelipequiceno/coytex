@extends('layouts.app')

@section('contenido')
    

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div class="container p-3">
        <div class="row">
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <h1>Detalle del Producto</h1>
            </div>
            <div class="col-6 text-center mt-3">
                <a class="btn btn-primary " href="{{ route('posts.index') }}">Regresar</a>
            </div>
        </div>
        <div class="card mt-3 col-12">
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nombre Producto</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Marca</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Detalle del producto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>{{ $post->id }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $post->title }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $post->brand }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $post->description }}</p>
                                        </td>

                                        <td>
                                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-success">Editar</a>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection




