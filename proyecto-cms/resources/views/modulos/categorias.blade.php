@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestor Categoria</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Gestor Usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">

            <div class="col-6">

                <div class="card">

                    <div class="card-body">

                        <form method="POST" action="" novalidate>

                            @csrf
                            @method('post')

                            <div class="input-group ">
                                <input type="text" class="form-control" name="categoria" placeholder="Escriba la categoría" >
                                
                                <div class="input-group-append">

                                        <button class="btn btn-primary" type="submit">
                                            Agregar
                                        </button> 

                                </div>

                            </div>
 
                        </form>
                        <hr class="text-dark">

                        @foreach($categorias as $categoria )

                        
                        <div class="row mb-3">

                            <div class="col-7">
                        <form method="post" action="{{ url('/categoria/'.$categoria->id)}}" novalidate>
                            @csrf
                            @method('put')
                                <div class="input-group">

                                    <input type="text" name="tituloActualizar" class="form-control" value="{{$categoria->nombre}}" >
        
                                </div>

                            </div>
                            <div class="col-5  ">

                                <div class="btn-group">
    
                                        <button type="submit" class="btn btn-success ml-1">
                                            Cambiar
                                        </button>
                                        
                            </form>
                                    <form  method="post" action="{{ url('/ctgDelete/'.$categoria->id)}}" >
                                        @csrf
                                        @method('delete')
                                        
                                        <button type="submit" class="btn btn-danger mx-1">
                                            Eliminar
                                        </button>
    
                                    </form>
                                </div>

                            </div>
                        </div>
                            
                        @endforeach



                    </div>

                </div>

            </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection