@extends('plantilla')

@section('content')
<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
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
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
            
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                <div class="row">
        
                  <div class="col-md-6">
                    <form action="{{ url('/actualizar')}}/{{$datos[0]->id}}" method="post" novalidate enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label >Logo:</label>
                          <input type="file" name="imagen">
                          @error('imagen')
                            <a class="alert alert-danger">solo se esperan acrivos jpg png</a>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label >Nombre del Sitio</label>
                          <input type="text" class="form-control" name="nombre" placeholder="nombre del sitio" >
                          @error('nombre')
                            <a class="alert alert-danger">Ingrese correcto el nombre</a>
                          @enderror
                        
                        </div>
                        <div class="form-group">
                          <label> Teléfono</label>
                          <input type="text" name="telefono" class="form-control" placeholder="teléfono">
                          @error('telefono')
                          <a class="alert alert-danger">Ingrese correcto el numero del teléfono</a>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label> Email:</label>
                          <input type="email" class="form-control" name="email" placeholder="el correo del sitio">
                          @error('email')
                          <a class="alert alert-danger">escriba correctamente el email</a>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label> Dirección:</label>
                          <input type="email" class="form-control" name="direccion" placeholder="el correo del sitio">
                          @error('direccion')
                          <a class="alert alert-danger">escriba correctamente la dirección</a>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-success float-auto">Guardar</button>
                    </form>

  
                   </div>
  
                    @foreach($datos as $dato)

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Logo:</label><br>
                          <img src="{{ url('/')}}/Storage/{{$dato->logo}}" class="img-fluid" alt="">
                        </div>
                        <div class="form-group">
                          <label >Nombre del sitio:</label>
                          <h3>{{$dato->nombre}}</h3>
                        </div>
                        <div class="form-group">
                          <label >Teléfono:</label>
                          <h4>{{$dato->telefono}}</h4>
                        </div>
                        <div class="form-group">
                          <label >Email:</label>
                          <h4>{{$dato->email}}</h4>
                        </div>
                        <div class="form-group">
                          <label >Dirección:</label>
                          <h4>{{$dato->direccion}}</h4>
                        </div>
      
                      </div>
  
                      
                    @endforeach
                </div>
              
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
</div>
@endsection