<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tienda en Linea - Dashboard</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/yeti/bootstrap.min.css"> <!-- tema bootstrap -->

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!-- fuente de iconos -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> <!-- fuentes-->
	<link rel="stylesheet" href="{{ asset('admin/css/main.css')}}"></link>

</head>
<body>

	@if(\Session::has('message'))
		@include('admin.partials.message')
	@endif
	
	@include('admin.partials.nav')

	@yield('content')

	@include('admin.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>

</body>
</html> 