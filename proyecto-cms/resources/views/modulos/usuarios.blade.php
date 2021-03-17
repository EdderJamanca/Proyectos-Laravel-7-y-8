@extends('plantilla')

@section('content')

<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestor de Usuarios</h1>
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

            <div class="col-12">

                <div class="card">
                    <div class="card-title">

                        <button class="btn btn-primary btn-md ml-3 mt-2">
                            <a href="{{url('crear-usuario')}}" class="text-white"> Crear Usuario </a>
                            
                        </button>

                    </div>

                    <div class="card-body">

                        <table class="table table-bordered table-hover table-striped">

                            <thead>

                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th>Acción</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>{{$usuario->rol}}</td>
                                    <td>
                                        <form action="{{url('usuarios/'.$usuario->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <a href=""><i class="fas fa-trash text-white"></i></a>
                                            </button>

                                        </form>

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
    </section>
    <!-- /.content -->
  </div>

@endsection