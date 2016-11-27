@extends('store.template')

@section('content')

	<div class="container">

		<img src="{{asset('images/imagen1.jpg')}}">

		<h1>Carrito de Compras</h1>
		
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Producto</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Borrar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($carrito as $item)
					<tr>
						<!--<td><img src="{{ $item->image }}" width="200"></td> -->
						<td>{{$item->nombre}}</td>
						<td>
							<input type="number" min="1" max="100" value="{{$item->cantidad}}" id="cantidad">
							<button class="btn btn-info" onclick="CambiarCantidad({{$item->id}})"><i class="fa fa-history"></i> Actualizar</button>
						</td>
						<td>
							<span class="label label-warning monto">${{number_format($item->cantidad * $item->precio,2)}}</span>
						</td>
						<td>
							<a href="{{route('carrito-delete',$item->id)}}" class="btn btn-danger">
								<span><i class="fa fa-trash"></i>
								 Borrar</span>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table><hr>
		<div class="panel">
			<p class="label label-danger monto"><span>Total: ${{$total}}</span></p>
		</div>
		
	

		<div class="panel" id="panelinfo">
			<a href="{{route('store')}}" class="label label-success"><span><i class="fa fa-cart-arrow-down"></i>
			 Seguir comprando</span></a>
			<a href="{{route('orden-detalle')}}"  class="label label-primary"><span><i class="fa fa-credit-card"></i> Continuar</span></a>
		</div>
	</div>	

@stop