@extends('plantilla')

@section('content')
<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestor Galería</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Galeria</li>
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

                        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#agregarImg">
                            Agregar Imagen
                        </button>

                    </div>

                    <div class="card-body">

                        <div class="row">
                            @foreach($galeria as $imagen )
                            <div class="col-md-3 mb-3">
                                <img src="{{url('/')}}/storage/{{$imagen->img}}" alt="" class="img-fluid">

                                <form action="{{url('/delet/'.$imagen->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger text-white" style="    display: block;
                                    position: absolute;
                                    top: 0;
                                    right: 6px;">&times;</button>
                                </form>
                            </div>
                           
                            @endforeach



                        </div>

                    </div>

                </div>

            </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <div class="modal" id="agregarImg">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header bg-primary">
                    <h3 class="text-white">Agregar Imagen</h3>
                    <button class="close lead text-white" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <form action="{{url('guardar_img')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group">
                                <input type="hidden" name="id_categoria" value="{{$excursion->id}}">
                            <div class="btn btn-default btn-file text-center" >
                                <i class="fas fa-paperclip">Adjuntar Imagen</i>
                                
                                <input type="file" name="imagen_galeria" class="imagen_una">
                                <img src="" class="imagen_galeria img-fluid">
                                <div class="error_img">
    
                                </div>
                            </div>
    
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Guardar</button>
                    </form>
                    
                </div>

            </div>

        </div>
  </div>

@endsection