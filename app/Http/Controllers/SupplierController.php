<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::orderBy('supplier_name', 'asc')->get();

        return view('suppliers.index', compact('suppliers'));
    }

    public function store(SupplierRequest $request)
    {
       
        Supplier::create([

           'supplier_name' => $request->supplier_name,

        ]);

        return redirect()->back()->with('msjstore', 'Proveedor creado con éxito');
    }

    public function create(){



        return redirect()->back();
    }


    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'supplier_name' => "required|string|max:100|unique:suppliers,supplier_name,{$supplier->id}",
        ]);

        $supplier->update([
            'supplier_name' => $request->input('supplier_name')
        ]);

        return redirect()->back()->with('msjedit', 'Proveedor actualizado exitosamente');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index')->with('msjdelete', 'Proveedor "'.$supplier->supplier_name.'" eliminado');
    }
}
