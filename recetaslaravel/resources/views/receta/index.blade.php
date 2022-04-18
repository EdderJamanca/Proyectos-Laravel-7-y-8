
@extends('layouts.app')
@section('botones')

 @include('iu.navegacion')

@endsection

@section('content')

        <h2 class="text-center mb-2">Administra tus Recetas</h2>
        

        <div class="col-md-10 mx-auto bg-white p-3">
            <table class="table">
                <thead class="bg-primary text-light">
                    <tr>
                        <th scole="col">Titulo</th>
                        <th scole="col">Categoria</th>
                        <th scole="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recetas as $receta)

                        <tr>
                            <td>{{$receta->titulo}}</td>
                            <td>{{$receta->categoria->nombre}}</td>
                            <td class="d-flex justify-content-end">
                                      
                                    <eliminar-receta
                                        receta-id={{$receta->id}}
                                    ></eliminar-receta>

                                
                                {{-- <a href="" class="btn btn-danger mr-1 text-white">Eliminar</a> --}}
                                <a href="{{route('receta.edit',['receta'=>$receta->id])}}" class="mx-1 btn btn-dark mr-1  text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                      </svg>
                                    </a>
                                <a href="{{route('recetas.show',['receta'=>$receta->id])}}" target="_blank" class="btn btn-success mr-1  text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                      </svg>
                                </a>
                            </td>
                        </tr>
                        
                    @endforeach

                </tbody>

            </table>
            <div class="col-12 mt-4 justify-content-center d-flex icon">
                {{$recetas->links()}}
            </div>
            <div class="row">
                <h2 class="text-center my-5">Recetas que te gustan</h2>
                <div class="col-md-10 mx-auto bg-white p-3">
                    @if(count($usuario->MeGusta)>0)
                        <ul class="list-group">
                            @foreach ( $usuario->MeGusta as $receta)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <p>{{$receta->titulo}}</p>
                                    <a href="{{route('recetas.show',['receta'=>$receta->id])}}" class="btn btn-outline-success"> Ver</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-center">Aún no tienes recetas Guardadas <small>Dale me gusta a la recetas y aparecerán aquí</small></p>
                    @endif

                </div>
            </div>
           
            
        </div>


@endsection
