<!DOCTYPE html>
<html charset="utf-8">
<head>
	<title>Dashboard - Tienda Laravel</title>	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/yeti/bootstrap.min.css"> <!-- tema bootstrap -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!-- fuente de iconos -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> <!-- fuentes-->

    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">  	
</head>
<body>
@include('store.partials.header')

	<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-sm-2 col-md-2">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Categorias</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="{{route('admin.categoria.index')}}">Lista</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a href="{{route('admin.categoria.create')}}">Nueva</a>
                                    </td>
                                </tr>                               
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Productos</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{route('admin.producto.index')}}">Lista</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{route('admin.producto.create')}}">Nuevo</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Usuarios</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{route('admin.usuario.index')}}">Lista</a>
                                    </td>
                                </tr>                               
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Ordenes</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="{{route('admin.orden.index')}}">Lista</a>
                                    </td>
                                </tr>                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-md-10">
            <div class="well">
                @yield('content')
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="{{ asset('js/pinterest_grid.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
