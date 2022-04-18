
@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="titulo-categoria text-uppercase mt-5 mb-4">
            Resultados Búsqueda:{{$CategoriaReceta->nombre}}

        </h3>
        <div class="row">
            @foreach ($recetas as $receta)
                @include('iu.recetas')
            @endforeach
            <div class="d-flex justify-content-center mt-5">
                {{$recetas->links()}}
            </div>
        </div>
    </div>

@endsection