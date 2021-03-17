<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>CRUD BASICO</title>
</head>
<body>
    <div class="container mt-5">
        <a href="{{ url('crear-empleado') }}">
            <button class="btn btn-md btn-primary">
                Crear usuario
            </button>
        </a>
        <table class="table table-hover mt-5">
            <thead class="bg-info text-white text-center">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Salario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{$empleado->nombre}}</td>
                        <td>{{$empleado->apellido}}</td>
                        <td>{{$empleado->telefono}}</td>
                        <td>{{$empleado->salario}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ url('edit/'.$empleado->id)}}">
                                    <button class="btn btn-primary mx-1">Editar</button>
                                </a>
                                
                                <a href="{{ url('show/'.$empleado->id)}}">
                                    <button class="btn btn-warning mx-1">Ver</button>
                                </a>
                                <form method="post" action="{{ url('delete/'.$empleado->id)}}">
                                    @csrf
                                    @method('delete');
                                    <button type="submit" class="btn btn-danger mx-1">Eliminar</button>
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                    
                @endforeach

            </tbody>

        </table>

    </div>
    
</body>
</html>