@extends('plantilla')

@section('content')
<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis Datos</h1>
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
          <div class="col-6">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Actualizar datos </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                <form method="post" novalidate>
                    @csrf
                    @method('put')

                    <div class="form-group">

                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="name"
                        placeholder="Tu nombre" value="{{auth()->user()->name }}">
                        {{-- <input type="hidden" value="{{auth()->user()->id}}"> --}}
                        @error('name')
                            <div class="alert alert-danger my-2 py-1 text-white w-100">Escriba su nombre correcto</div>
                        @enderror

                    </div>

                    <div class="form-group">

                        <label>Email:</label>
                        <input type="text" class="form-control"  name="email"
                        placeholder="Tu nombre" value={{auth()->user()->email}} >
                        @error('emial')
                        <div class="alert alert-danger my-2 py-1 text-white w-100">Escriba su password correcto</div>
                        @enderror

                    </div>

                    <div class="form-group">

                        <label>Cambiar Clave:</label>
                        <input type="password" class="form-control" name="password"
                         placeholder="Tu nombre" value="">
                        {{-- <input type="hidden"  value="{{auth()->user()->password}}"> --}}
                        @error('password')
                        <div class="alert alert-danger my-2 py-1 text-white w-100">Escriba su password correcto</div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Actualizar
                    </button>


                </form>
                
              </div>
              <!-- /.card-body -->

            </div>
           
          </div>

          <div class="col-6">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Actualizar datos </h3>

                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                Start creating your amazing application!
            </div>
            <!-- /.card-body -->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection