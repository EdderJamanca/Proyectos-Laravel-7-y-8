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
        <a href="{{ url('/') }}">
            <button class="btn btn-md btn-primary">
                Regresar
            </button>
        </a>
        <ul class="list-group">
            {{-- @for ($i = 0; $i < count($empleado); $i++)
            <li class="list-group-item">{{$i}}</li>
            @endfor --}}
     
            <li class="list-group-item">{{$empleado->nombre}}</li> 
            <li class="list-group-item">{{$empleado->apellido}}</li> 
            <li class="list-group-item">{{$empleado->salario}}</li> 


 

        </ul>

    </div>
    
</body>
</html>