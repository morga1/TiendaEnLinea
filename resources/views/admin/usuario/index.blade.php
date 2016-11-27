@extends('admin.template')

@section('content')
    
    <div class="container">
        <table class="table table-striped table-bordered table-hover table-condensed">
        	<thead>
        		<tr>
        			<th>Nombre</th>
        			<th>Email</th>        			
                    <th>Editar</th>                   
                    <th>Borrar</th>        			
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($usuarios as $u)
        			<tr>        				
        				<td><p>{{$u->name}}</p></td>
                        <td><p>{{$u->email}}</p></td>
                        <td>
                            @if($u->tipo === 'user')
                             {!! Form::model($u,['route'=>['admin.usuario.update',$u->id],'method'=>'PUT']) !!}
                                Tipo: {!!Form::select('tipo', $tipos, $u->tipo)!!}
                                {{ Form::submit('Cambiar', ['class' => 'btn btn-success']) }}
                            {{ Form::close() }}                            
                            @endif
                        </td>
                        <td>
                            @if($u->tipo === 'user')
                             {!! Form::model($u,['route'=>['admin.usuario.destroy',$u->id],'method'=>'DELETE']) !!}
                                {{ Form::hidden('id', $u->id) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                            @endif
                        </td>
        			</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
	
@endsection