@extends('welcome')

@section('content')


<div class="container-fluid">

<div class="row">

<center><img src="{{ url('/')}}/storage/{{$unaExcursion->img}}"></center>
        
<h1 class="text-center text-info"><b>{{$unaExcursion->titulo}}</b></h1>

<div class="col-12">

    <p style="padding: 15px">{{$unaExcursion->descripcion}}</p>

</div>

</div>

<div class="row" id="galeria">

        <hr>
        
        <h1 class="text-center text-info"><b>GALERÍA DE IMÁGENES</b></h1>

        <hr>

        <ul>
            @foreach($galeria as $image)

                <li style="margin:10px 15px">
                    <a rel="grupo" href="{{ url('/')}}/storage/{{$image->img}}">
                    <img src="{{ url('/')}}/storage/{{$image->img}}" class="img-fluid" >
                    </a>
                </li>
                
            @endforeach

        </ul>

    </div>



@endsection