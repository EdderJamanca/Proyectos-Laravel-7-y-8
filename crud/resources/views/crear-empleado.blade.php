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
    
    <title>Crear Empleado</title>
</head>
<body>
    <div class="container mt-5">

        <center>
            <h4>Crear Empleado</h4>

            <hr class="mt-5">

            <form method="post" novalidate>
                @csrf
                <div class="row d-flex justify-content-center">
                    <div class="col-5">
    
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        @error('nombre')
                        <p>Debe Colocar bien su nombre</p>
                        @enderror
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" class="form-control" name="apellido">
                        </div>
                        @error('apellido')
                        <p>Debe Colocar bien su apellido</p>
                        @enderror
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" name="telefono">
                        </div>
                        @error('telefono')
                        <p>Debe Colocar bien su telefono</p>
                        @enderror
                        <div class="form-group">
                            <label>Salario</label>
                            <input type="number" class="form-control" name="salario">
                        </div>
                        @error('salario')
                        <p>Debe Colocar bien su salario</p>
                        @enderror
                        <hr>
                        <button type="submit" class="btn btn-primary btn-md">Crear</button>
    
                    </div>
                </div>
    
            </form>
    
        </center>

    </div>
</body>
</html>