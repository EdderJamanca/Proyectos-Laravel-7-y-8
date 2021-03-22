@extends('plantilla')
@section('content')
<div class="content-wrapper" style="min-height: 571px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestor de mensajes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mensajes</li>
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

                <div class="table-responsive-sm">

                    <table class="table table-hover bg-darck">
                        <thead class="text-center">
                            <tr>
                                <th>nombre</th>
                                <th>email</th>
                                <th>mensaje</th>
                                <th>
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mensaje as $ms)
                                @if($ms->estado=="no")
                                 <tr class="bg-primary">
                                    @else
                                  <tr>
                                @endif
                        
                                    <td>{{$ms->nombre}}</td>
                                    <td>{{$ms->email}}</td>
                                    <td>{{$ms->mensaje}}</td>
                                    <td>
                                        <form action="{{ url('/ledido/'.$ms->id)}}" method="post">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-warning text-white">
                                                Leer
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

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