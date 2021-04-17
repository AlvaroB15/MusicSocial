@extends('layouts.app')

{{-- <link rel="stylesheet" href="/resources/css/trix.css"/> --}}
@section('styles')
    {{-- <link rel="stylesheet" type="text/css" href="/resources/css/trix.css"> --}}
@endsection

@section('botones')
    <a class="btn btn-primary" href="{{ route('bandas.index') }}">Regresar</a>
@endsection



@section('content')

    <h2 class="text-center">Crear Nuevo Grupo Musical</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('bandas.store') }}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="titulo">Nombre</label>
                    <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror " id="titulo"
                        placeholder="Título de Grupo Musical" value="{{ old('titulo') }}">

                    @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="genero">Genero</label>
                    <select name="genero" id="genero" class="form-control @error('genero') is-invalid @enderror">

                        <option value="">-- Seleccione un género</option>
                        @foreach ($generos as $id => $genero)
                            <option value="{{ $id }}" {{ old('genero') == $id ? 'selected' : '' }}>
                                {{ $genero }}</option>
                        @endforeach

                    </select>

                    @error('genero')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="biografia">Biografía</label>

                    {{-- @trix(\App\Post::class, 'content') --}}

                    {{-- @trix(\App\Post::class, 'content')
                    <input type="submit"> --}}

                    <input name="biografia" id="biografia" type="hidden" value="{{ old('biografia') }}">

                    {{-- <trix-editor input="biografia" class=" trix-content @error('biografia') is-invalid @enderror"> --}}
                    </trix-editor>

                    @error('biografia')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group mt-3 mb-3">

                    <label for="imagen">Elige la imagen de la banda</label>
                    <br>
                    <input type="file" name="imagen" id="imagen" class=" @error('genero') is-invalid @enderror">

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar Grupo Musical">
                </div>
            </form>

        </div>

    </div>


@endsection


{{-- <script src="../../resources/css/trix.js"></script> --}}
@section('scripts')
    {{-- <script type="text/javascript" src="../../resources/js/trix.js"></script> --}}
@endsection