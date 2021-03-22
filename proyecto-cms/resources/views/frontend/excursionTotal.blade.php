@extends('welcome')
@section('content')

<div class="row" id="articulos">
    
    <hr>

    <h1 class="text-center text-info"><b>EXCURSIONES</b></h1>

    <hr>

    <ul>
        @foreach($todosExcursion as $excursion)

            <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <img src="{{url('/')}}/storage/{{$excursion->img}}" class="img-thumbnail">
                <h1>{{$excursion->titulo}}</h1>
                <p>{{$excursion->descripcion}}</p>
                <a href="{{ url('/una_excurson/'.$excursion->id)}}">
                <button class="btn btn-default">Leer Más</button>
                </a>

                <hr>

            </li>

        @endforeach

    </ul>



</div>

@endsection