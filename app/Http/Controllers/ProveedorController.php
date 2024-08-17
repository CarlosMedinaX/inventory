<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProveedorRequest;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){

        $proveedores = Proveedor::orderBy('nombreProveedor', 'asc')->paginate(6);


        return view('proveedores.index', compact('proveedores'));

    }

    public function create(){



        return view('proveedores.index');
    }
    public function store(StoreProveedorRequest $request){

        Proveedor::create([
            'nombreProveedor' => $request->input('nombreProveedor')

        ]);
        return redirect()->back();
    }

    public function update(Request $request, Proveedor $proveedor){

        $request->validate([
            'nombreProveedor' => "required|string|max:30|min:3|unique:proveedores,nombreProveedor,{$proveedor->id}",
        ]);

        $proveedor->update([
            'nombreProveedor' => $request->input('nombreProveedor'),
        ]);

        return redirect()->back();

    }


    public function destroy(Proveedor $proveedor){

        $proveedor->delete();


        return redirect()->back();
    }
}
