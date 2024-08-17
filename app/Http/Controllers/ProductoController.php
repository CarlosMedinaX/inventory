<?php

namespace App\Http\Controllers;

use App\Models\Estante;
use App\Models\Producto;
use App\Models\Subcategoria;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::with('subcategoria', 'estante', 'suppliers')
        ->select('productos.id', 'subcategorias.nombreSubcategoria', 'productos.nombreProducto', 'productos.precioUnitario', 'productos.stockMinimo', 'productos.stockMaximo', 'productos.cantidad', 'estantes.nombreEstante', 'suppliers.supplier_name', 'subcategoria_id', 'estante_id', 'supplier_id')
        ->join('subcategorias', 'productos.subcategoria_id', '=', 'subcategorias.id')
        ->join('estantes', 'productos.estante_id', '=', 'estantes.id')
        ->join('productos_x_suppliers', 'productos.id', '=', 'productos_x_suppliers.producto_id')
        ->join('suppliers', 'productos_x_suppliers.supplier_id', '=', 'suppliers.id')
        ->get();


        // $subcategorias2 = DB::table('subcategorias')->pluck('nombreSubcategoria', 'id');

        $subcategorias = Subcategoria::orderBy('nombreSubcategoria', 'asc')->get();
        $estantes = Estante::orderBy('nombreEstante', 'asc')->get();

        // $estantes2 = Producto::with('estante')->select('estantes.nombreEstante', 'estantes.id', 'productos.estante_id')->join('estantes', 'productos.estante_id', '=', 'estantes.id')->get();

        $suppliers = DB::table('suppliers')->select('id', 'supplier_name')->orderBy('supplier_name')->get();



    
        return view('productos.index', compact('productos', 'subcategorias', 'estantes', 'suppliers'));
    }

    public function pdf(){

        $productos = Producto::with('subcategoria', 'estante', 'suppliers')
        ->select('productos.id', 'subcategorias.nombreSubcategoria', 'productos.nombreProducto', 'productos.precioUnitario', 'productos.stockMinimo', 'productos.stockMaximo', 'productos.cantidad', 'estantes.nombreEstante', 'suppliers.supplier_name', 'subcategoria_id', 'estante_id', 'supplier_id')
        ->join('subcategorias', 'productos.subcategoria_id', '=', 'subcategorias.id')
        ->join('estantes', 'productos.estante_id', '=', 'estantes.id')
        ->join('productos_x_suppliers', 'productos.id', '=', 'productos_x_suppliers.producto_id')
        ->join('suppliers', 'productos_x_suppliers.supplier_id', '=', 'suppliers.id')
        ->orderBy('productos.id')
        ->get();



        $subcategorias = Subcategoria::get();
        $estantes = DB::table('estantes')->get();
        $suppliers = DB::table('suppliers')->get();

        return view('productos.pdf', compact('productos', 'subcategorias', 'estantes', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $producto = Producto::create([

            'nombreProducto' => $request->input('nombreProducto'),
            'precioUnitario' => $request->input('precioUnitario'),
            'stockMinimo' => $request->input('stockMinimo'),
            'stockMaximo' => $request->input('stockMaximo'),
            'cantidad' => $request->input('cantidad'),
            'subcategoria_id' => $request->input('subcategoria_id'),
            'estante_id' => $request->input('estante_id'),
            
        ]);

        $supplierId = $request->input('supplier_name');

        if ($supplierId) {
            $producto->suppliers()->attach($supplierId);
        }

        return redirect()->back()->with('msjstore', 'producto creado con éxito');
    }


    public function show(Producto $producto)
     {
        //
     }


    public function edit(Producto $producto)
     {

        // $producto = Producto::with('subcategorias')->select('id', 'nombreSubcategoria')->get();

        // return view('productos.update', compact('producto'));
     }


    public function update(Request $request, Producto $producto)
        {   
         
            $producto->update([

                $producto->nombreProducto = $request->nombreProducto,
                $producto->precioUnitario = $request->precioUnitario,
                $producto->stockMinimo = $request->stockMinimo,
                $producto->stockMaximo = $request->stockMaximo,
                $producto->cantidad = $request->cantidad,
                $producto->subcategoria_id = $request->subcategoria_id,
                $producto->estante_id = $request->estante_id,
    
            ]);

            $producto->suppliers()->sync($request->input('supplier_id', []));


            return redirect('/productos')->with('msjedit', 'producto actualizado exitosamente');
        }
        



        
 
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->back()->with('msjdelete', 'producto "' . $producto->nombreProducto . '" eliminado con éxito');

    }
}

























       // $request->validate([
            //     'nombreProducto' => "required|string|min:3|unique:productos,nombreProducto,{$producto->id}",
            //     'precioUnitario' => 'required|string|min:3',
            //     'stockMinimo' => 'required|string|min:3',
            //     'stockMaximo' => 'required|string|min:3',
            //     'cantidad' => 'required|string|min:3',
            //     'subcategoria_id' => 'required|exists:subcategorias,id',
            //     'estante_id' => 'required|exists:estantes,id',
            //     'supplier_id' => 'array',
            //     'supplier_id.*' => 'exists:suppliers,id'
            // ]); 

            // $producto->update([

            //     'nombreProducto' => $request->input('nombreProducto'),
            //     'precioUnitario' => $request->input('precioUnitario'),
            //     'stockMinimo' => $request->input('stockMinimo'),
            //     'stockMaximo' => $request->input('stockMaximo'),
            //     'cantidad' => $request->input('cantidad'),
            //     'subcategoria_id' => $request->input('subcategoria_id'),
            //     'estante_id' => $request->input('estante_id'),

                
            // ]);