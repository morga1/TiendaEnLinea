@extends('admin.template')

@section('content')
    
    <div class="container">

        <fieldset>
            {!!Form::model($categoria, ['route'=>['admin.categoria.update',$categoria->id],'method'=>'PUT'])!!}
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    {!!Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese Nombre'])!!}
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion: </label>
                    {!!Form::textarea('descripcion', null, ['class'=>'form-control','placeholder'=>'Ingrese descripcion'])!!}
                </div>
                <div class="form-group">
                    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                </div>
            {!!Form::close()!!}
        </fieldset>

    </div>
	
@endsection