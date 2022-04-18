
@extends('layouts.app')

@section('content')



    <article class="contenido-receta bg-white p-3 shadow">
        <h1 class="text-center mb-4">{{$receta->titulo}}</h1>

        <div class="imagen-receta">
            <img src="/storage/{{$receta->imagen}}" class="w-100" alt="">
        </div>
        <div class="receta-meta">
            <p>
                <span class="text-primary">Escrito en:</span>
                <a class=" text-dark"href="{{route('categorias.show',['CategoriaReceta'=> $receta->categoria->id])}}">{{$receta->categoria->nombre}}</a>
                
            </p>
            <p>
                <span class="text-primary">Autor:</span>
                <a class=" text-dark"href="{{route('perfiles.show',['perfil'=> $receta->autor->id])}}">{{$receta->autor->name}}</a>
                
            </p>
            <p>
                <span class="text-primary">Fecha:</span>
                @php
                    $fecha=$receta->created_at
                @endphp
                <fecha-receta fecha="{{$fecha}}"></fecha-receta>
            </p>
            <div class="ingredientes">
                <h2 class="my-3 text-primary">Ingredientes</h2>
                {!! $receta->ingredientes !!}
            </div>
            <div class="preparacion">
                <h2 class="my-3 text-primary">Preparacion</h2>
                {!! $receta->preparacion !!}
            </div>
            <p> {{$like}}</p>
            <div class="row  justify-content-center text-center">
                <like-boton
                    receta-id={{"$receta->id"}}
                    n={{false}}
                    likes={{$likes}}
                ></like-boton>
            </div>

           
        </div>

    </article>

@endsection