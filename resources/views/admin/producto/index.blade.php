@extends('admin.template')

@section('content')
    
    <div class="container">
        <table class="table table-striped table-bordered table-hover table-condensed">
        	<thead>
        		<tr>
                    <th>Imagen</th>
        			<th>Nombre</th>
        			<th>Precio</th>        			
        			<th>Categoria</th>                    
                    <th>Borrar</th>  
                    <th>Editar</th>  
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($productos as $j)
        			<tr>
                        <td>
                            <img src="{{asset('images/'.$j->foto)}}">
                        </td>
        				<td>{{$j->nombre}}</td>
        				<td><p>{{$j->precio}}</p></td>
                        <td>{{$j->categoria->nombre}}</td>
        				<td>
                             {!! Form::model($j,['route'=>['admin.producto.destroy',$j],'method'=>'DELETE']) !!}
                                {{ Form::hidden('id', $j->id) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
        				</td>
        				<td>
        					<a href="{{route('admin.producto.edit',$j->id)}}" class="btn btn-success"><i class="fa fa-pencil"></i> Editar</a>
        				</td>
        			</tr>
        		@endforeach
        	</tbody>
        </table>
        {{$productos->render()}}
    </div>
	
@endsection