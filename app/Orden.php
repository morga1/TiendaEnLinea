<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
     protected $fillable = ['subtotal','envio','user_id'];


     public function usuario()
     {
     	return $this->belongsTo('App\User','user_id');
     }
}
