<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservas</title>

    {{-- ================================================
                PLUGINS CSS
    ================================================= --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/57549a60e0.js" crossorigin="anonymous"></script>

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('/')}}/css/plugins/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/')}}/css/plugins/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- ================================================
                    PLUGINS JS BOOTSTRAP
        ================================================= --}}

            <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- overlayScrollbars -->
    <script src="{{url('/')}}/js/plugins/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('/')}}/js/plugins/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('/')}}/js/plugins/demo.js"></script>

</head>
    <body class="sidebar-mini layout-fixed sidebar-collapse" style="height: auto;">
        @include('modulos.cabecera')
        @include('modulos.menu')
        @yield('content')
        <script src="{{url('/')}}/js/script01.js"></script>
    </body>
</html>