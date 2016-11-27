@extends('store.template')

@section('content')

@include('store.partials.carrusel')

<div class="container text-center">

		@foreach($productos as $producto)
			<div class="products">
				<div class="col-md-4">
							
						<h2>{{$producto->nombre}}</h2>			
						<img src="{{'images/'.$producto->foto}}">				
							<div class="product-info panel">
								<h3>
									<p class="label label-warning">Precio: ${{$producto->precio}}</p>
								</h3>
									<p>
										<a href="{{route('verproducto',$producto)}}" class="label label-info">
											<span><i class="fa fa-book"></i> Leer mas</span></a>
										<a href="{{route('carrito-add',$producto->id)}}"  class="label label-success">
											<span><i class="fa fa-cart-arrow-down"></i> Agregar al carrito</span>
										</a>
									</p>
							</div>

				</div>
			</div>
		@endforeach	
</div>	

@endsection