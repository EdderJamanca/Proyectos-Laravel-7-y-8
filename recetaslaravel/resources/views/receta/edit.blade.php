@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css" integrity="sha512-494Ejp/5WyoRNfh+nPLhSCQPHhcsbA5PoIGv2/FuEo+QLfW+L7JQGPdh8Qy2ZOmkF27pyYlALrxteMiKau1tyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 @endsection

@section('botones')

    <a href="{{route('recetas.index')}}" class="btn btn-outline-primary text-uppercase mr-2 font-weight-bold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Volver</a>

@endsection

@section('content')

        <div class="row d-flex justify-content-center">

            <div class="col-md-8  py-3 px-5 border  border-danger rounded">

                <h2 class="text-center">Editar Receta</h2>

                <form method="POST" action="{{route('receta.update',['receta'=>$receta->id])}}" enctype="multipart/form-data" novalidate>
                @csrf 
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="titulo">Titulo Recetas</label>
                    <input id="titulo" 
                        class="form-control @error('titulo') is-invalid @enderror" 
                        type="text"
                        name="titulo"
                        placeholder="Titulo Receta"
                        value="{{$receta->titulo}}"
                        >
                    @error('titulo')
                        <span class="invalid-feedback d-block" role="alert alert-danger">
                                <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="from-group mb-3">
                    <label for='categoria'>Categoria</label>
                    <select 
                        name="categoria"
                        class="form-control @error('categoria') is-invalid @enderror"
                        id="categoria"
                    >
                            <option value="">--Seleccione--</option></option>
                        @foreach ($categorias as $categoria )
                            <option value="{{$categoria->id}}" {{$receta->categoria_id==$categoria->id ? 'selected':''}}> {{$categoria->nombre}}</option>
                        @endforeach
                
                    </select>
                    @error('categoria')
                        <span class="invalid-feedback d-block" role="alert alert-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="preparacion">Preparación</label>
                    <input id="preparacion" type="hidden"
                         name="preparacion"
                         value="{{$receta->preparacion}}"/>
                    <trix-editor
                     class="form-control @error('preparacion') is-invalid @enderror"
                     input="preparacion"></trix-editor>
                    @error('preparacion')
                        <span class="invalid-feedback d-block" role="alert alert-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="ingredientes">Ingredientes</label>
                    <input id="ingredientes" type="hidden"
                     name="ingredientes" value="{{$receta->ingredientes}}"/>
                    <trix-editor 
                    class="form-control @error('ingredientes') is-invalid @enderror"
                    input="ingredientes"></trix-editor>
                    @error('ingredientes')
                        <span class="invalid-feedback d-block" role="alert alert-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="imagen">Elige la Imagen</label>
                    <input 
                        id="imagen"
                        class="form-control @error('imagen') is-invalid @enderror"
                         type="file"
                         
                         name="imagen"/>
                    @error('imagen')
                         <span class="invalid-feedback d-block" role="alert alert-danger">
                             <strong>{{$message}}</strong>
                         </span>
                     @enderror
                </div>
                <div class="imagen-receta mb-3">
                    <img src="/storage/{{$receta->imagen}}" class="w-25" alt="">
                </div>
           
                <div class="form-group">
                    <input  class="btn btn-primary text-white" type="submit" value="Modificar Recetas">
                </div>

                </form>
                
            </div>
            
        </div>


@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js" integrity="sha512-wEfICgx3CX6pCmTy6go+PmYVKDdi4KHhKKz5Xx/boKOZOtG7+rrm2fP7RUR2o4m/EbPdwbKWnP05dvj4uzoclA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix-core.js" integrity="sha512-czwu7AiWnXeWWDENM73UUWhrlCmwpd6bwkGOhVUVouBWTqHaqjhnE+oLLfY8yegVycVO2v2bxCW13iyw3wF4wQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script> --}}
 @endsection