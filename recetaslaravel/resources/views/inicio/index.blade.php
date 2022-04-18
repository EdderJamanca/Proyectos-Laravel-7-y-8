@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
@endsection
@section('hero')
        <div class="hero-categorias">
                <form class="container h-100" action="{{route('buscar.search')}}">
                        <div class="row h-100 align-items-center">
                                <div class="col-md-4 texto-buscar">
                                        <p class="display-4">Encuentra una receta para tu proxima comida</p>
                                        <input 
                                            type="search"
                                            name="buscar"
                                            class="form-control"
                                            placeholder="Buscar Receta"
                                            >
                                </div>
                        </div>
                </form>
        </div>
@endsection

@section('content')
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Últimas Recetas</h2>
        <div class="owl-carousel owl-theme">
                @foreach ($nuevas as $nueva)
                
                        <div class="card ">
                                <img src="/storage/{{$nueva->imagen}}" class="card-img-top" alt="imagen receta">
                                <div class="card-body">
                                        <h3>{{$nueva->titulo}}</h3>
                                        <p>{{Str::words(strip_tags($nueva->preparacion),25)}}</p>
                                        <a href="{{route('recetas.show',['receta'=>$nueva->id])}}" class="btn btn-primary d-block font-weight-bold text-uppercase">Ver Receta</a>
                                </div>
                        </div>

                
                    
                @endforeach
        </div>
        <div class="container">
                <h2 class="titulo-categoria text-uppercase mb-2">Receta más Votadas</h2>
                <div class="row">
                        
                        @foreach ($votados as $receta )
                                @include('iu.recetas')
                        @endforeach
                            
                        
                </div>
        </div>
        @foreach ($recetas as $key =>$grupo )

                <div class="container">
                        <h2 class="titulo-categoria text-uppercase mb-2">{{str_replace('-',' ',$key)}}</h2>
                        <div class="row">
                                @foreach ($grupo as $recetas )
                                        @foreach ($recetas as $receta )
                                                @include('iu.recetas')
                                        @endforeach
                                    
                                @endforeach
                        </div>
                </div>
        
        @endforeach
@endsection