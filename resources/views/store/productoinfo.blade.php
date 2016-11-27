@extends('store.template')

@section('content')
<div class="container">
	<div id="panelproducto">
		<img src="{{'../images/'.$producto->foto}}" width="200px">		
		<div id="panelinfo" class="panel">
			<h3>{{$producto->nombre}}</h3>
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
				<a href="{{route('carrito-add',$producto->id)}}" class="label label-success"><i class="fa fa-cart-arrow-down"></i> Agregar</a>
				<a href="{{route('store')}}" class="label label-info"><i class="fa fa-chevron-left"></i> Volver</a>
			</p>
			
		</div>
	</div>
</div>
@endsection