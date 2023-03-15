<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {

        $productos = Producto::orderBy('id', 'desc')->paginate(9);

        return view("productos.index", compact("productos"));
    }

    public function create()
    {
        return view("productos.create");
    }

    public function store(StoreProducto $request)
    {
        /* $producto->nombre = $request->nombre;
        $producto->categoria = $request->categoria;
        $producto->marca = $request->marca;
        $producto->descripcion = $request->descripcion;

        $producto->save(); */
        
        $producto = Producto::create ($request->all());

        session()->flash('status', 'El producto se agruego correctamente');

        return redirect()->route('productos.show', $producto->id);
    }

    public function show(Producto $producto)
    {

        return view("productos.show", compact("producto"));
    }

    public function edit(Producto $producto)
    {

        return view('productos.edit', compact("producto"));
    }

    public function update(StoreProducto $request)
    {

       /*  $request->validate([
            'nombre'=> 'required',
            'marca'=> 'required',
            'descripcion' => 'required'
        ]);
 */
        /* $producto->nombre = $request->nombre;
        $producto->categoria = $request->categoria;
        $producto->marca = $request->marca;
        $producto->descripcion = $request->descripcion;

        $producto->save(); */
        Producto::update($request->validate());
        

        return redirect()->route('productos.show', $producto);
    }

    public function destroy(Producto $producto){
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
