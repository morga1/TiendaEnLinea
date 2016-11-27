<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\producto;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $carrito = \Session::get('carrito');
        $total = $this->calculartotal();
        return view('store.carrito',compact('carrito','total'));
    }

    public function __construct()
    {
        if(!\Session::has('carrito'))\Session::put('carrito',array());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Producto $producto)
    {
        $carrito = \Session::get('carrito');
        $producto->cantidad = 1;
        $carrito[$producto->id] = $producto;
        \Session::put('carrito',$carrito);
        return redirect()->route('carrito-show');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$cantidad)
    {
        $carrito = \Session::get('carrito');
        $carrito[$id]->cantidad = $cantidad;        
        \Session::put('carrito',$carrito);
        return redirect()->route('carrito-show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $carrito = \Session::get('carrito');        
        unset($carrito[$id]);
        \Session::put('carrito',$carrito);
        return redirect()->route('carrito-show');
    }



    protected function calculartotal()
    {
        $carrito = \Session::get('carrito');
        $total = 0;
        foreach ($carrito as $c) {
            $total += $c->cantidad * $c->precio;
        }
        return $total;
    }

    public function ordenDetalle()
    {        
        if(count(\Session::get('carrito'))<=0)
        {
            return redirect()->route('store');
        }   
        $carrito = \Session::get('carrito');
        $total = $this->calculartotal();
        return view('store.orden-detalle',compact('carrito','total'));
    }


}
