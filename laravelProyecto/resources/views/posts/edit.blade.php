@extends('layouts.app')

@section('contenido')
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Editar Producto</h1>
            </div>
        </div>
       <div class="row justify-content-center p-3">
            <div class="col-6">
                <form action="{{ route('posts.update', $posts) }}" method="POST">
                    @csrf  @method('PATCH')
                            
                    <div class="form-group">
                        <label class="mt-2" for="title">Nombre Producto</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $posts->title) }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="brand">Marca</label>
                        <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $posts->brand) }}">
                        @error('brand')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion del Producto</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description', $posts->description) }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="row text-center">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Regresar</a>
                        </div>
                    </div>
                </form>
            
                
            </div>
       </div>
    </div>
@endsection
