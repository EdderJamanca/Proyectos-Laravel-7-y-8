@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css" integrity="sha512-494Ejp/5WyoRNfh+nPLhSCQPHhcsbA5PoIGv2/FuEo+QLfW+L7JQGPdh8Qy2ZOmkF27pyYlALrxteMiKau1tyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 @endsection

@section('botones')

    <a href="{{route('recetas.index')}}" class="btn btn-primary mr-2 text-white">Volver</a>

@endsection

@section('content')
    <h1 class="text-center">Editar Mi Perfil</h1>
    
    <div class="row justify-content-center mt-5">

        <div class="col-md-8 py-3 px-5 border  border-danger rounded">
            <form method="post" action="{{route('perfiles.update',['perfil'=>$perfil->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mt-3">
                    <label for="nombre">Nombre</label>
                    <input type="text"
                            name="nombre"
                            class="form-control @error('nombre') is-invalid @enderror"
                            id="nombre"
                            placeholder="Tu Nombre"
                            value="{{$perfil->usuario->name}}"
                            
                    >
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="url">Sitio Web</label>
                    <input type="text"
                        name="url"
                        class="form-control @error('url') is-invalid @enderror"
                        id="url"
                        placeholder="Tu sitio Web"
                        value="{{$perfil->usuario->url}}"
                    >
                    @error('url')
                        <span class="invalid-feeback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="biografia">Biografia</label>
                    <input 
                        id="biografia"
                        type="hidden"
                        name="biografia"
                        value="{{$perfil->biografia}}"
                    >
                    <trix-editor
                        class="form-control @error('biografia') is-invalid @enderror"
                        input="biografia"
                    >
                    </trix-editor>
                    @error('biografia')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
    
                </div>
                <div class="form-group mt-3">
                    <label for="imagen">Tu Imagen</label>
                    <input 
                        id="imagen"
                        type="file"
                        class="form-control @error('imagen') is-invalid @enderror"
                        name="imagen"
                    >
                    @if($perfil->imagen)
                        <div class="mt-4">
                            <p>Imagen Actual</p>
                            <img src="/storage/{{$perfil->imagen}}" style="width: 300px" alt="">
    
                        </div>
                        @error('imagen')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    @endif
                </div>
                <div class="form-group my-3">
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