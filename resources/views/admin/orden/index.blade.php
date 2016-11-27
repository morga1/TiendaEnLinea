@extends('admin.template')

@section('content')
    
    <div class="container">
        <table class="table table-striped table-bordered table-hover table-condensed">
        	<thead>
        		<tr>
        			<th>Nro</th>
        			<th>Subtotal</th>        			
        			<th>Usuario</th>                    
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($ordenes as $o)
        			<tr>
        				<td>{{$o->id}}</td>
        				<td><p>{{$o->subtotal}}</p></td>
                        <td><p>{{$o->usuario->name}}</p></td>
        			</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
	
@endsection