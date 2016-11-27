<!DOCTYPE html>
<html charset="utf-8">
<head>
	<title>Tienda Laravel</title>	

	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/yeti/bootstrap.min.css"> <!-- tema bootstrap -->

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!-- fuente de iconos -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> <!-- fuentes-->

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">	
</head>
<body>
	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif

	@include('store.partials.header')
	
	@yield('content')

	
	@include('store.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>