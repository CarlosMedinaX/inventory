<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\StoreCursoRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::orderBy('nombreCategoria', 'asc')->get();


        return view('categorias.index', compact('categorias'));
    }

    public function pdf(){

        $categorias = Categoria::orderBy('id')->get();

        $pdf = Pdf::loadView('categorias.pdf', compact('categorias'));
        return $pdf->download('invoice.pdf');

        // return  view('categorias.pdf', compact('categorias'));
    }

    public function create(){



        return view('categorias.index', compact(''));
    }

    public function store(StoreCategoriaRequest $request){

        Categoria::create([

            'nombreCategoria' => $request->input('nombreCategoria')

        ]);
        
        
        return redirect()->back()->with('msjcreate', 'Categoria creada con éxito');
    }

    public function update(Request $request, Categoria $categoria){

        $request->validate([
            'nombreCategoria' => "required|string|max:45|min:3|unique:categorias,nombreCategoria," . $categoria->id,
        ]);
    
        $categoria->update([
            'nombreCategoria' => $request->input('nombreCategoria'),
        ]);

        return redirect()->back()->with('msjedit', 'Categoria actualizada exitosamente');

    }

    public function destroy(Categoria $categoria){

        $categoria->delete();

        return redirect()->back()->with('msjdelete', 'Categoria "'. $categoria->nombreCategoria .'" eliminada');

    }
}
