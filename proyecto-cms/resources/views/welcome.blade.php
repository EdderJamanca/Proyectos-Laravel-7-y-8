<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FrontEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{url('/')}}/images/icono.jpg">

  <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/57549a60e0.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('/')}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/css/style.css">
	<link rel="stylesheet" href="{{url('/')}}/css/fonts.css">
	<link rel="stylesheet" href="{{url('/')}}/css/cssFancybox/jquery.fancybox.css">

	<script src="{{url('/')}}/js/jquery-2.2.0.min.js"></script>
	<script src="{{url('/')}}/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/js/jquery.fancybox.js"></script>
	<script src="{{url('/')}}/js/animatescroll.js"></script>
	<script src="{{url('/')}}/js/jquery.scrollUp.js"></script>
</head>
<body class="container-fluid">
    @include('frontend.menu');
    @yield('content')

    
<script src="js/script.js"></script>
    
</body>
</html>