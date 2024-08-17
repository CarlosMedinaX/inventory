<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubcategoriaRequest;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoriaController extends Controller
{
    public function index(){

        // se relaciona subcategoria con categoria
        $subcategorias = Subcategoria::with('categoria')
        ->select('subcategorias.id','subcategorias.nombreSubcategoria', 'categorias.nombreCategoria', 'subcategorias.categoria_id')
        ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id')
        ->get();

        // en la vista create me trae las categorias
        $categorias = DB::table('categorias')->select('id','nombreCategoria')->distinct()->get();

        $categorias2 = Categoria::select('nombreCategoria', 'id')->distinct()->get();


        return view('subcategorias.index', compact('subcategorias', 'categorias', 'categorias2'));

        
    }

    public function edit(Subcategoria $subcategoria){

        
        // $categorias = DB::table('categorias')->select('id','nombreCategoria')->distinct()->get();

        // return view('subcategorias.update', compact('categorias'));
    }
    
    public function create(){


     
        return view('subcategorias.create');
    }

    public function store(StoreSubcategoriaRequest $request){
        
        Subcategoria::create([

            'nombreSubcategoria' => $request->input('nombreSubcategoria'),
            'categoria_id' => $request->input('categoria_id')

        ]);


        return redirect()->back()->with('msjstore', 'Subcategoria creada con éxito');
    }

    // Siempre colocar la variable que hace referencia al modelo $subcategoria en este caso en singular, para que te pueda actualizar, igualmente con delete 
    public function update(Request $request, Subcategoria $subcategoria) {

        $request->validate([
            'nombreSubcategoria' => "required|string|max:30|unique:subcategorias,nombreSubcategoria,{$subcategoria->id}",
            'categoria_id' => 'required|exists:categorias,id',
        ]);
    
        $subcategoria->update([
                'nombreSubcategoria' => $request->input('nombreSubcategoria'),
            'categoria_id' => $request->input('categoria_id')

        ]);

    
        return redirect()->back()->with('msjedit', 'Subcategoria actualizada exitosamente');
    }
    

    public function destroy(Subcategoria $subcategoria){

            $subcategoria->delete();
            return redirect()->back()->with('msjdelete', 'Subcategoria "'.$subcategoria->nombreSubcategoria.'" eliminada');

        
    }



    
   
    




}
