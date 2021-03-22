@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestor de Slide</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
            <div class="col-4">

                <div class="card">

                    <div class="card-header">
                        Registrar Slide
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('post')

                            <div class="form-group mb-3">
                                <label>Título</label>
                                <input type="text"  name="titulo" class="form-control" 

                                        placeholder="Título de la imagen">
                            </div>
                            <div class="form-group mb-3">
                                <label>Imagen:</label>
                                <input type="file" name="image"  class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label >Descripción</label>
                                <input type="text" name="descripcion"  class="form-control" placeholder="descripción de la foto">
                            </div>
                            <button type="submit" class="btn btn-primary text-white">Registrar Slide</button>
                        </form>
                    </div>

                </div>

            </div>

            <div class="col-8">

                <div class="card">

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped">

                                <thead class="text-center">
    
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Imagen</th>
                                        <th>descripción</th>
                                        <th>Acción</th>
                                    </tr>
    
                                </thead>
                                <tbody class="text-center">
                                    @foreach($slide as $key)
                                       
                                        <tr>
                                            <td> {{$key->titulo}}</td>
                                            <td>
                                                <img src="storage/{{$key->img}}" alt="" class="img-fluid">
                                            </td>
                                            <td> {{$key->descripcion}}</td>
                                            <td>
                                                <form method="post" action="{{url('/slide/'.$key->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">
                                                        <i class="fas fa-trash text-white"></i>
                                                    </button>
                                                </form>
                                                {{-- <form action="" method="post">
                                                    @csrf
                                                    
                                                </form> --}}

                                                <button class="btn btn-warning" data-toggle="modal" data-target="#modalSlide">
                                                    <a href="#">
                                                        <i class="fas fa-pencil-alt text-white"></i>
                                                    </a>
                                                </button>
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
  {{-- ===========================
            MODAL SLIDE.
    ============================== --}}
    <div class="modal" id="modalSlide">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    Editar Slide
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('put')

                        <div class="form-group mb-3">
                            <label>Título</label>
                            <input type="text" name="EditarTitulo" class="form-control" 

                                    placeholder="Título de la imagen">
                        </div>
                        <div class="form-group mb-3">
                            <label>Imagen:</label>
                            <input type="file" name="EditarImagen" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label >Descripción</label>
                            <input type="text" name="EditarDescripción" class="form-control" placeholder="descripción de la foto">
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Registrar Slide</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection