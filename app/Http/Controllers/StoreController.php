<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Producto;

class StoreController extends Controller
{
    public function index()
    {
    	$productos = Producto::all();    	
    	return view('store.index',compact('productos'));
    }

    public function verproducto(Producto $producto)
    {   
    	$requerimientos = explode(',', $producto->requerimientos);
    	return view('store.productoinfo',compact('producto','requerimientos'));
    }

    public function contacto()
    {
        return view('store.contacto');
    }
}
