@extends('admin.template')

@section('content')
    
    <div class="container">
        <table class="table table-striped table-bordered table-hover table-condensed">
        	<thead>
        		<tr>
        			<th>Nombre</th>
        			<th>Descripcion</th>        			
        			<th>Borrar</th>
                    <th>Editar</th>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($categorias as $c)
        			<tr>
        				<td>{{$c->nombre}}</td>
        				<td><p>{{$c->descripcion}}</p></td>
        				<td>
                            {!! Form::model($c,['route'=>['admin.categoria.destroy',$c],'method'=>'DELETE']) !!}
                                {{ Form::hidden('id', $c->id) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
        				</td>
        				<td>
        					<a href="{{route('admin.categoria.edit',$c->id)}}" class="btn btn-success"><i class="fa fa-pencil"></i> Editar</a>
        				</td>
        			</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
	
@endsection