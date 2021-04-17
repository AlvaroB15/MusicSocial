@extends('layouts.app')

@section('botones')
    <a class="btn btn-primary" href="{{route('bandas.create')}}">Crear Grupo</a>
@endsection

@section('content')

    <h2 class="text-center">Lista de Grupos Musicales</h2>

    <div class="col-md-10 mx-auto bg-white p-3 table-responsive">

        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Nombre</th>
                    <th scole="col">Género Musical</th>
                    <th scole="col">Año Fundación</th>
                    <th scole="col">Integrantes</th>
                </tr>
            </thead>
            <tbody>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </tbody>
        </table>

    </div>


@endsection

{{-- @foreach ($grupos as $item)
    <li>{{$item}}</li>
 @endforeach
 
 <h2>Generos: </h2>

 @foreach ($grupos as $item)
    <li>{{$item}}</li>
 @endforeach --}}
