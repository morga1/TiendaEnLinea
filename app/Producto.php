<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon; //Carbon guarda imagenes en assets

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['nombre','foto','fotodos','fototres','descripcion','requerimientos','compania','lanzamiento','id_categoria','precio','costo'];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria','id_categoria');
    }

    public function setFotoAttribute($foto) 
    {
    	$this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
    	$nombre =  Carbon::now()->second.$foto->getClientOriginalName();
    	\Storage::disk('local')->put($nombre,\File::get($foto));
    }

    public function setFotodosAttribute($fotodos) 
    {
        $this->attributes['fotodos'] = Carbon::now()->second.$fotodos->getClientOriginalName();
        $nombre =  Carbon::now()->second.$fotodos->getClientOriginalName();
        \Storage::disk('local')->put($nombre,\File::get($fotodos));
    }

    public function setFototresAttribute($fototres) 
    {
        $this->attributes['fototres'] = Carbon::now()->second.$fototres->getClientOriginalName();
        $nombre =  Carbon::now()->second.$fototres->getClientOriginalName();
        \Storage::disk('local')->put($nombre,\File::get($fototres));
    }

}
