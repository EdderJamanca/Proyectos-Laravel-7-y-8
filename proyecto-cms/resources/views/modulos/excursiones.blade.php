@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestor Excursiones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Gestor Excursiones</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#crearExcursiones">
                            Crear Excursiones
                        </button>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive-sm">

                            <table class="table table-striped table-hover">
                                <thead class="text-center" >
                                    <tr>
                                        <th>N°</th>
                                        <th>Excursion</th>
                                        <th>Categoría</th>
                                        <th>Imagen</th>
                                        <th>Descripción</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach($extenciones as $extencione)
                                        <tr>
                                            <td>{{$extencione->id}}</td>
                                            <td>{{$extencione->titulo}}</td>
                                            <td>{{$extencione->categoria->nombre}}</td>
                                            <td><img src="{{url('/')}}/storage/{{$extencione->img}}" alt="" class="img-fluid w-75"></td>
                                            <td style="width: 600px">{{$extencione->descripcion}}</td>
                                            <td>

                                                <div class="btn-group">
    
                                                        <a href="{{ url('excursion/'.$extencione->id)}}" class=" btn btn-warning mr-1 ">
                                                            <i class="fas fa-pencil-alt text-white"></i>
                                                        </a>
                                                    
                                                        <form action="{{url('/EliminarEx/'.$extencione->id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class=" btn btn-danger  mr-1">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>

                                                        </form>
                                                        <a href="{{ url('galeria/'.$extencione->id)}}" class=" btn btn-success mr-1 ">
                                                            <i class="fas fa-image"></i>
                                                        </a>

                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  {{-- ===============================
            Crear Excursion
    ================================== --}}
    <div class="modal" id="crearExcursiones">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header bg-primary text-white">
                    <h4>Crear Extenciones</h4>
                    <button class="close text-white" data-dismiss="modal" type="button">&times;</button>
                </div>

                <div class="modal-body">

                    <form action="{{ url('/excursione')}}" method="post" novalidate enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="form-group">
                            <label> Nombre Excursiones</label>
                            <input type="text" class="form-control" placeholder="nombre de excursiones" name="nombreExcursion">

                        </div>
                        <div class="form-group">
                            <label >Categoria</label>
                            <select name="idcategoria" class="form-control">
                                <option value="">seleccione....</option>
                                 @foreach($categorias as $categoria )
                                 <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                     
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Imagen de Excursión</label>
                            <input type="file"name="imagenExcursion" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Descripción de Excursiones</label>
                            <textarea name="descripcionExcursion"  rows="3" class="form-control" placeholder="Descripcón de la excursión"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Guardar
                        </button>
                    </form>

                </div>

            </div>

        </div>

    </div>

    {{-- ===============================
            Editar Excursion
    ================================== --}}
    @if(isset($status))

        @if($status==200)
            {{-- @foreach($excursion01 as $excursion=>$value) --}}
                
                <div class="modal" id="EditarExcursiones">
            
                    <div class="modal-dialog">
            
                        <div class="modal-content">
            
                            <div class="modal-header bg-primary">
                                <h4 class=" text-white">Editar Extenciones</h4>
                                <button class="close text-white" data-dismiss="modal" type="button">&times;</button>
                            </div>
            
                            <div class="modal-body">
            
                                <form action="{{url('/excursiones/'.$excursion01->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
            
                                    <div class="form-group">
                         
                                        <label> Nombre Excursiones </label>
                                        <input type="text" class="form-control" placeholder="nombre de excursiones"
                                        value="{{$excursion01->titulo}}"
                                        name="nombreExEditar">
            
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Categotia</label> 
                                        <select name="ediCategoria" class="form-control">
                                            <option value="{{$excursion01->id_Categoria}}">{{$excursion01->categoria->nombre}}</option>
                                            @foreach($categorias as $categoria )


                                                @php
                                                    if(trim($categoria->id) == trim($excursion01->id_Categoria)){
                                                        continue;
                                                    }
                                                @endphp
                                              <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="btn btn-default btn-file">
                                            <i class="fas fa-paperclip">Adjuntar Imagen</i>
                                            <input type="file" name="imagenExEditar" class="imagenExEditar">
                                        </div>
                                        <img src="{{url('/')}}/storage/{{$excursion01->img}}" alt="" class="img-fluid imagenEdi">
                                        <div class="errorImagenCarga">

                                        </div>
                                        <input type="hidden" name="imagen-antigua" value="{{$excursion01->img}}">
                                    </div>
                                    <div class="form-group">
                                        <label >Descripción de Excursiones</label>
                                        <textarea name="descripcionExcEditar"  rows="5"  
                                        class="form-control" placeholder="Descripcón de la excursión">{{$excursion01->descripcion}}</textarea>
                                    </div>
            
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Actualizar
                                    </button>
                                </form>
            
                            </div>
            
                        </div>
            
                    </div>
            
                </div>
            {{-- @endforeach --}}
            <script>

                $('#EditarExcursiones').modal();
            </script>
        @endif

        
    @endif
@endsection

