@extends('store.template')

@section('content')
	<h1>Detalle del Producto</h1>
	
	<div class="product-block">
		<img src="{{ $product->image }}" width="300">
	</div>

	<div class="product-block">
		<h3>{{ $product->name }}</h3><hr>
		<div>
			<p>{{ $product->description}}</p>	
			<p>Precio: ${{ $product->price }}</p>
			<p>
				<a href="#">La quiero</a>
			</p>
		</div>
		
	</div>

<p>
<a href="javascript:history.back()">Regresar</a>
</p>
	
@stop