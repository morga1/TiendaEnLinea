@extends('store.template')

@section('content')
<div class="container">
			<div id="panelproducto">
				<h1><center><i class="fa fa-shopping-cart"></i></center></h1><hr>
			</div>


		<div class="col-md-8">

		<div class="col-md-6">
			@include('store.carrusel-producto')
		</div>

	<div class="row">
	<div class="col-md-6">
		<div id="panelinfo" class="panel">
			<h3><center>{{$producto->nombre}}</center></h3>
			<p>{{$producto->descripcion}}</p>
			<p>Requerimientos: 
				<ul>
				@foreach($requerimientos as $r)
					<li>
						{{$r}}
					</li>
				@endforeach
				</ul>
			</p>
			<p>Compania: {{$producto->compania}}</p>
			<p>Lanzamiento: {{$producto->lanzamiento}}</p>

			<p class="label label-danger">Precio: $ {{$producto->precio}}</p>

			<p>
				<a href="{{route('carrito-add',$producto->id)}}" class="label label-success">
					<i class="fa fa-cart-arrow-down"></i>
					Agregar
				</a>
			</p>
		</div>
	</div><hr>
	
	<p>
		<center><a href="{{route('store')}}" class="label label-info"><i class="fa fa-chevron-left"></i> Volver</a>
		</center>
	</p>
			
		</div>
	</div>
</div>
@endsection