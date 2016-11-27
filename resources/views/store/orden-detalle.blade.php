@extends('store.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Detalle de Pedido</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
				<h3>Datos del Usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<td>Nombre: </td><td>{{Auth::user()->name}}</td>
					</tr>
					<tr>
						<td>Correo: </td><td>{{Auth::user()->email}}</td>
					</tr>
				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del Pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
					</tr>
					@foreach($carrito as $item)
						<tr>
							<td>{{$item->nombre}}</td>
							<td>{{number_format($item->precio,2)}}</td>
							<td>{{$item->cantidad}}</td>
							<td>{{number_format($item->precio * $item->cantidad,2)}}</td>
						</tr>
					@endforeach						
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: ${{number_format($total,2)}}
					</span>
				</h3><hr>
				<p>
					<a href="{{route('carrito-show')}}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>
					<a href="{{ route('payment') }}" class="btn btn-warning">
    					Pagar con <i class="fa fa-cc-paypal fa-2x"></i>
					</a>	
				</p>
			</div>
		</div>
	</div>

@endsection