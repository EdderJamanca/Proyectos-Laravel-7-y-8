@extends('plantilla')
@section('content')

<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Crear Usuario</li>
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

                    <div class="card-body">
                        <form method="post" action="" novalidate>
                            @csrf
                            @method('post')

                            <div class="row">

                                <div class="col-6">

                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" placeholder="nombre" name="name" class="form-control mt-2 py-1">
                                        @error('name')
                                        <div class="alert alert-danger">
                                            Escriba correctamente tu nombre
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" class="form-control mt-2 py-1" name="email" placeholder="Email">
                                        @error('email')
                                        <div class="alert alert-danger">
                                            Escriba correctamente su correo
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <label > Clave</label>
                                        <input type="password" name="password" placeholder="password" class="form-control mt-2 py-1">
                                        @error('password')
                                        <div class="alert alert-danger">
                                            Escriba correctamente su password
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                       <label >Seleccione el Rol:</label>
                                       <select name="rol" class="form-control">
                                           <option>Administrador</option>
                                           <option>Editor</option>
                                       </select>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-md float-right">
                                <a  class="text-white">Registrar</a>
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection