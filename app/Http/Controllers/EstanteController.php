<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstanteRequest;
use App\Models\Estante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class EstanteController extends Controller
{
    public function index(){

        $estantes = Estante::orderBy('nombreEstante', 'asc')->get();


        return view('estantes.index', compact('estantes'));
    }

    public function pdf(){

        $estantes = Estante::orderBy('id')->get();

        $pdf = Pdf::loadView('estantes.pdf', compact('estantes'));
        return $pdf->download('lista-estantes.pdf');
    }

    public function store(StoreEstanteRequest $request){

        Estante::create([

            'nombreEstante' => $request->input('nombreEstante'),
            'pisoEstante' => $request->input('pisoEstante'),

        ]);
        

        return redirect()->back()->with('msjstore', 'Estante creado con éxito');
    }

    public function update(Request $request, Estante $estante){

        $request->validate([
            'nombreEstante' => "required|string|max:30|min:3|unique:estantes,nombreEstante,{$estante->id}",
            'pisoEstante' => "required|integer",
        ]);

        $estante->update([
            'nombreEstante' => $request->input('nombreEstante'),
            'pisoEstante' => $request->input('pisoEstante')
        ]);

        return redirect()->back()->with('msjedit', 'Estante actualizado exitosamente');

    }

    public function destroy(Estante $estante){

        $estante->delete();

        return redirect()->back()->with('msjdelete', 'Estante "'.$estante->nombreEstante.'" eliminado');
    }
}
