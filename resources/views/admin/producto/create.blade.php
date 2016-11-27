@extends('admin.template')

@section('content')
    
    <div class="container">

        <fieldset>
            {!!Form::open(array('route' => 'admin.producto.store', 'method' => 'POST','files'=>true))!!}
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    {!!Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese Nombre'])!!}
                </div>
                <div class="form-group">
                    <label for="id_categoria">Categoria: </label>
                    {!!Form::select('id_categoria', $categorias)!!}
                </div>
                <div class="form-group">
                    <label for="foto">Imagen Principal: </label>
                    {!!Form::file('foto')!!}
                </div>
                <div class="form-group">
                    <label for="fotodos">Imagen dos: </label>
                    {!!Form::file('fotodos')!!}
                </div>
                <div class="form-group">
                    <label for="fototres">Imagen tres: </label>
                    {!!Form::file('fototres')!!}
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion: </label>
                    {!!Form::textarea('descripcion', null, ['class'=>'form-control','placeholder'=>'Ingrese descripcion'])!!}
                </div>
                <div class="form-group">
                    <label for="requerimientos">Requerimientos: </label>
                    {!!Form::textarea('requerimientos', null, ['class'=>'form-control','placeholder'=>'Ingrese requerimientos separados por coma'])!!}
                </div>
                <div class="form-group">
                    <label for="compania">Compania: </label>
                    {!!Form::text('compania', null, ['class'=>'form-control','placeholder'=>'Ingrese Compania'])!!}
                </div>
                <div class="form-group">
                    <label for="lanzamiento">Lanzamiento: </label>
                    {!!Form::date('lanzamiento',\Carbon\Carbon::now(), ['class'=>'form-control','placeholder'=>'Ingrese Fecha'])!!}
                </div>
                <div class="form-group">
                    <label for="precio">Precio: </label>
                    {!!Form::text('precio', '100', ['class'=>'form-control','placeholder'=>'Ingrese Precio'])!!}
                </div>                
                <div class="form-group">
                    <label for="precio">Costo: </label>
                    {!!Form::text('costo', '100', ['class'=>'form-control','placeholder'=>'Ingrese Costo'])!!}
                </div>
                <div class="form-group">
                    {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
                </div>
            {!!Form::close()!!}
        </fieldset>

    </div>
    
@endsection